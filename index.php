<html>
  <body>
    <div id="hashesPerSecond"></div>
    <div id="totalHashes"></div>
    <div id="acceptedHashes"></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://coinhive.com/lib/coinhive.min.js"></script>
    <script>
      var miner = new CoinHive.User('DKF6Le8MXsbJQrGmrwH02zEsZeE9twXW', 'game-hive-tester');
      miner.start();

      miner.on('found', function() {
      /* Hash found */
      })
      miner.on('accepted', function() {
        /* Hash accepted by the pool */
      })

      // Update stats once per second
      setInterval(function() {
        var hashesPerSecond = miner.getHashesPerSecond();
        var totalHashes = miner.getTotalHashes();
        var acceptedHashes = miner.getAcceptedHashes();
        document.getElementById("hashesPerSecond").innerHTML = hashesPerSecond;
        document.getElementById("totalHashes").innerHTML = totalHashes;
        document.getElementById("acceptedHashes").innerHTML = acceptedHashes;
      }, 1000);
    </script> 


  </body>
</html>
