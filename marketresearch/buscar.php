<!DOCTYPE html>
<html>
<head>
<title>Market Research - Smart Brand Protection</title>
<style> 
input[type=text] {
  width: 130px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 14px;
  background-color: white;
  background-image: url('searchicon.png');
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}
input[type=number] {
  width: 130px;
}

input[type=text]:focus {
  width: 100%;
}
#fals {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#fals td, #fals th {
  border: 1px solid #ddd;
  padding: 8px;
}

#fals tr:nth-child(even){background-color: #f2f2f2;}

#fals tr:hover {background-color: #ddd;}

#fals th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #24c7af;
  color: white;
}
#fals2 {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#fals2 td, #fals2 th {
  border: 1px solid #ddd;
  padding: 8px;
}

#fals2 tr:nth-child(even){background-color: #f2f2f2;}

#fals2 tr:hover {background-color: #ddd;}

#fals2 th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #66ccff;
  color: white;
}
table {
  width: 30%;
}
/* unvisited link */
a:link {
  color: black;
}

/* visited link */
a:visited {
  color: red;
}

/* mouse over link */
a:hover {
  color: green;
}

/* selected link */
a:active {
  color: green;
}
a:link {
  text-decoration: none;
}

a:visited {
  text-decoration: none;
}

a:hover {
  text-decoration: none;
}

a:active {
  text-decoration: none;
}
.button {
  background-color: #24c7af; /* Green */
  border: none;
  color: white;
  padding: 10px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
}

.button3 {
  background-color: white; 
  color: black; 
  border: 2px solid #24c7af;
}

.button3:hover {
  background-color: #24c7af;
  color: white;
}
p {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
}
</style>
<link rel="icon" type="image/png" href="ico.png">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>
<body>

<table border="0" align="center" bgcolor="#FFFFFF">
  <tr>
    <td align="center">
	  <form method="Post" action="buscar.php">
<p><img src="smartbrand.png" width="224" height="59"></p>
<p>
  <input type="text" name="resultat" autocomplete="off" placeholder="" required> <b>
[ <?php 
$resultat = $_POST['resultat']; 
echo$resultat; 
?> ]
  </b>
</p>
</form>
<table id="fals">
  <tr>
    <th>Rogue sites</th>
  </tr>
  <tr>
    <td><a href="https://www.google.com/search?q=<?php echo$resultat; ?>+outlet" class="links" target="_blank">Google</a></td></tr>
    <tr>
     <td><a href="https://duckduckgo.com/?q=<?php echo$resultat; ?>+outlet" class="links" target="_blank">DuckDuckGo</a></td>
  </tr>
</table>


<p></p>
<table id="fals">
  <tr>
    <th>Marketplace</th>
    <th>Country</th>
  </tr>
  <tr>
    <td><a href="https://www.aliexpress.com/wholesale?ltype=wholesale&d=y&origin=y&isViewCP=y&catId=0&initiative_id=SB_20170315020024&SearchText=<?php echo$resultat; ?>&blanktest=0&tc=af" class="links" target="_blank">Aliexpress</a></td>
    <td>China</td>
  </tr>
  <tr>
    <td><a href="http://www.alibaba.com/trade/search?fsb=y&IndexArea=product_en&CatId=&SearchText=<?php echo$resultat; ?>" class="links" target="_blank">Alibaba</a></td>
    <td>China</td>
  </tr>
  <tr>
    <td><a href="http://es.dhgate.com/wholesale/search.do?act=search&sus=&susTag=&searchkey=<?php echo$resultat; ?>" class="links" target="_blank">DHGate</a></td>
    <td>China</td>
  </tr>
  <tr>
    <td><a href="https://www.wish.com/search/<?php echo$resultat; ?>" class="links" target="_blank">Wish</a></td>
    <td>USA</td>
  </tr>
  <tr>
    <td><a href="https://www.google.com/search?q=<?php echo$resultat; ?>+yupoo" class="links" target="_blank">Yupoo</a></td>
    <td>China</td>
  </tr>
<tr>
    <td><a href="https://list.tmall.com/search_product.htm?q=<?php echo$resultat; ?>" class="links" target="_blank">Tmall</a></td>
    <td>China</td>
  </tr>

  <tr>
    <td><a href="https://sg.carousell.com/search/products/?query=<?php echo$resultat; ?>" class="links" target="_blank">Carousell</a></td>
    <td>Singapore</td>
  </tr>
    <tr>
    <td><a href="https://s.taobao.com/search?q=<?php echo$resultat; ?>" class="links" target="_blank">Taobao</a></td>
    <td>China</td>
  </tr>

  <tr>
    <td><a href="https://www.ioffer.com/search/items/<?php echo$resultat; ?>" class="links" target="_blank">iOffer</a></td>
    <td>USA</td>
  </tr>
  <tr>
    <td><a href="https://www.tokopedia.com/search?st=product&q=<?php echo$resultat; ?>" target="_blank">Tokopedia</a></td>
    <td>Indonesia</td>
  </tr>
  <tr>
    <td><a href="https://www.bukalapak.com/products?utf8=?&source=navbar&from=omnisearch&search_source=omnisearch_organic&search[keywords]=<?php echo$resultat; ?>" target="_blank">Bukalapak</a></td>
    <td>Indonesia</td>
  </tr>
  <tr>
    <td><a href="https://s.1688.com/selloffer/offer_search.htm?keywords=<?php echo$resultat; ?>" target="_blank" data-saferedirecturl="https://www.google.com/url?hl=es&q=http://1688.com&source=gmail&ust=1528023294487000&usg=AFQjCNF-FspHxXefXisP4KLQj0H19AKbIw">1688.com</a></td>
    <td>China</td>
  </tr>
    <tr>
    <td><a href="https://www.amazon.com/s?k=<?php echo$resultat; ?>" target="_blank">Amazon</a></td>
    <td>USA</td>
  </tr>
  <tr>
    <td><a href="https://www.ebay.com/sch/i.html?_from=R40&_trksid=m570.l1313&_nkw=<?php echo$resultat; ?>" target="_blank">Ebay</a></td>
    <td>USA</td>
  </tr>
<tr>
    <td><a href="https://www.ebay.es/sch/i.html?_from=R40&_trksid=m570.l1313&_nkw=<?php echo$resultat; ?>" target="_blank">Ebay</a></td>
    <td>España</td>
  </tr>
  <tr>
    <td><a href="https://www.google.com/search?q=<?php echo$resultat; ?>+mercadolibre" target="_blank">Mercadolibre</a></td>
    <td>Latinoamérica</td>
  </tr>

</table>
<p></p>
<table id="fals">
  <tr>
    <th>Social Networking</th>
    <th>Country</th>
  </tr>
  <tr>
    <td><a href="https://www.facebook.com/marketplace/search/?query=<?php echo$resultat; ?>" class="links" target="_blank">Facebook Marketplace</a></td>
    <td>-</td>
  </tr>
  <tr>
    <td><a href="https://www.facebook.com/search/top/?q=<?php echo$resultat; ?>" class="links" target="_blank">Facebook</a></td>
    <td>USA</td>
  </tr>
  <tr>
    <td><a href="https://twitter.com/search?q=<?php echo$resultat; ?>" class="links" target="_blank">Twitter</a></td>
    <td>USA</td>
  </tr>
  <tr>
    <td><a href="https://www.instagram.com/explore/tags/<?php echo$resultat; ?>" target="_blank">Instagram</a></td>
    <td>USA</td>
  </tr>
</table>
<p></p>
<table id="fals2">
<tr>
    <th>Currency converter</th>
  </tr>
  <tr>
    <td><input id="inputEuros" type="number" placeholder="EUR" oninput="eurosDolares(this.value)" onchange="eurosDolares(this.value)">
      <img src="european-union.png" width="26" height="26" align="absbottom">      -        
      <input id="inputDolares" type="number" placeholder="CNY" oninput="dolaresEuros(this.value)" onchange="dolaresEuros(this.value)">
      <img src="330651.png" width="26" height="26" align="absbottom"></td>
  </tr>
  </table>
<p><img src="smart-protection.png" width="420" height="300"></p>
    </body>
<script>
function eurosDolares(valNum) {
  document.getElementById("inputDolares").value=valNum*7.78154;
}
function dolaresEuros(valNum) {
  document.getElementById("inputEuros").value=valNum*0.128509;
}
</script>
</html>