<?hh

function f(mixed $x): void {
  try {
    var_dump($x as nonnull);
  } catch (TypeAssertionException $_) {
    echo "not nonnull: ".gettype($x)."\n";
  }
}

f(1);
f(false);
f(1.5);
f('foo');
f(STDIN);
f(new stdClass());
f(vec[]);
f(dict[]);
f(keyset[]);
f(null);
