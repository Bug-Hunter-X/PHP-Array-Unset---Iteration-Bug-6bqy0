In PHP, a common yet subtle error arises when dealing with array keys that are not strictly numeric.  Consider this example:

```php
$data = ['a' => 1, 'b' => 2, 'c' => 3];

foreach ($data as $key => $value) {
  if ($key === 'b') {
    unset($data[$key]);
  }
}

foreach ($data as $key => $value) {
  echo "Key: $key, Value: $value\n";
}
```

This code intends to remove the element with key 'b'. However, it might not work as expected if you modify the array while iterating over it. Unsetting an element shifts the index for the remaining elements which leads to skipping the next element if using the key for iteration.

The issue is that removing an element re-indexes the array, but the loop's internal pointer continues.  Therefore the loop will skip element 'c' 