The correct way to remove elements from an array while iterating is to iterate over a copy of the array's keys, or to iterate in reverse order. Here is the corrected code:

```php
$data = ['a' => 1, 'b' => 2, 'c' => 3];

// Method 1: Iterate over a copy of keys
$keys = array_keys($data);
foreach ($keys as $key) {
  if ($key === 'b') {
    unset($data[$key]);
  }
}

foreach ($data as $key => $value) {
  echo "Key: $key, Value: $value\n";
}

// Method 2: Iterate in reverse order
$data = ['a' => 1, 'b' => 2, 'c' => 3];
for ($i = count($data) - 1; $i >= 0; $i--) {
    if (key($data) === 'b') {
        unset($data[key($data)]);
    }
    next($data);
}
foreach ($data as $key => $value) {
  echo "Key: $key, Value: $value\n";
}
```

Both methods ensure that removing an element does not interfere with the iteration process.