<?php

declare(strict_types=1);

class JsonEncoder
{
    public function encode(array $data): string
    {
        return json_encode($data);
    }
}

class DataProcessor
{
    public function __construct(private JsonEncoder $encoder)
    {
    }

    public function process(array $data): string
    {
        // do some processing on $data
        // and then return encoded to JSON
        return $this->encoder->encode($data);
    }
}

class App
{
    public function __construct(private DataProcessor $dataProcessor)
    {
    }

    public function run(): void
    {
        $data = ['test'];
        echo $this->dataProcessor->process($data);
    }
}

class Container
{
    private array $entries = [];

    public function get(string $id)
    {
        if (!$this->has($id)) {
            throw new RuntimeException('Class ' . $id . 'not found in container.');
        }
        $entry = $this->entries[$id];

        return $entry($this);
    }

    public function has(string $id): bool
    {
        return isset($this->entries[$id]);
    }

    public function set(string $id, callable $callable): void
    {
        $this->entries[$id] = $callable;
    }
}

$container = new Container();
$container->set(
    JsonEncoder::class,
    function (Container $container) {
        return new JsonEncoder();
    }
);

$container->set(
    DataProcessor::class,
    function (Container $container) {

        return new DataProcessor($container->get(JsonEncoder::class));
    }
);

$app = new App($container->get(DataProcessor::class));
$app->run();
