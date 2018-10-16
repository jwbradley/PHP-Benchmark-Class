# PHP-Benchmark-Class
## Obtain the runtime of scripts with calls to this class.

# Feature
 This class returns the time elapsed during the execution of the php script
 
 ```
 include(Benchmark.php);
 $runtime = new Benchmark();
 sleep(15);
 echo "Total time to execute script: " .  $runtime->elapsedTime() ;
 ```
