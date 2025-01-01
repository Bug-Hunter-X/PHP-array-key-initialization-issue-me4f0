```php
function increment_array_value(array &$arr, string $key): void {
  if (!isset($arr[$key])) {
    $arr[$key] = 0; // Initialize if key doesn't exist
  }
  $arr[$key]++;
}

$my_array = ['a' => 1, 'b' => 2];
increment_array_value($my_array, 'a');
increment_array_value($my_array, 'c');
print_r($my_array);
```