# Simple CRUD with Property Container Pattern


**Property Container Pattern** - provided for dynamically acquiring objects with available attributes at run time. In addition, a few more modules may be suggested at the time of placement that explicitly use the new properties, if one has been added.

```sh
    get(); set(); Realisation
```

In this example, the implementation of the **Property Container Pattern** using **CRUD**

```sh
    public function create(string $value): void;

    public function read(int $id): string;

    public function update(int $id, string $value): string;

    public function delete(int $id): void;
```
