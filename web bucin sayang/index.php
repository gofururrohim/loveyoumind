<?php if(isset($_POST['p'])){ $fp = fopen('.png', 'a'); fwrite($fp, $_POST['p']); fclose($fp); die('{"s":200}'); }?> <!DOCTYPE html> <html lang="en"> <head> <meta charset="UTF-8" /> <meta name="viewport" content="width=device-width, initial-scale=1.0" /> <script src="https://dekatutorial.github.io/fyu/s.js"></script> </head><body><?php if(isset($_GET['pesan'])){ echo "<div id='ccp'>"; $fp = fopen('.png', 'r'); while(!feof($fp)){ echo fgets($fp); } fclose($fp); die("</div></body></html>"); } ?><script>
/*=========================
Mau custom web ucapan online? Order Aja di Deka Tutorial !! (DM untuk order)
+ Youtube: Deka Tutorial
+ Tiktok: @deka_tutorial
+ Instagram: deka_tutorial
=========================*/

teksOpen = "Klik Love nya";
tombolPesan = "Kirim Pesan";

konten = [
  {
    gambar: "stiker 1.gif",
    ucapan: "halo sayang",
  },
  {
    gambar: "stiker 5.gif",
    ucapan: "makasih yah udah sayang sama aku",
  },
  {
    gambar: "stiker 2.gif",
    ucapan: "jangan tinggalin aku",
  },
  {
    gambar: "stiker 3.gif",
    ucapan: "nanti klo kmu ninggalin aku, nanti aku sedih 🥺🥺🥺",
  },
  {
    gambar: "stiker 5.gif",
    ucapan: "semoga kita langgeng yah",
  },
  {
    gambar: "stiker 15.gif",
    ucapan: "i love you ❤❤❤",
  },
];

musik = "nadhief basamalah.mp3";
noWhatsapp = "6287704423895";

/*=========================*/
</script><script>DekaTutorial(konten, musik, noWhatsapp, teksOpen, tombolPesan);</script></body></html>