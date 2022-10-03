<?php
spl_autoload_register(function ($name) {
 echo "Vreau sa încarc $name.\n";
 throw new Exception("Nu pot încărca $name.");
});
try {
 $obj = new NonLoadableClass();
} catch (Exception $e) {
 echo $e->getMessage(), "\n";
}
?>