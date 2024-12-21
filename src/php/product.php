<!DOCTYPE html>
<html lang="ja-JP" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--  
    Document Title
    =============================================
    -->
    <title>Product</title>
    
    <?
      include("import.html");
    ?>
    
  </head>
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
    
    <?
      include("header.php");
    ?>
    
        <section class="module bg-dark-60 pricing-page-header mb-80" data-background="assets/images/top.png">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-m-plus-1">取扱商品</h2>
                <div class="module-subtitle font-m-plus-1">説明</div>
              </div>
            </div>
          </div>
        </section>
        <section class="module-small">
          <div class="container">

              <div class="col-sm-2 mb-sm-20">
                <select class="form-control" id="kind2" onchange="search_of_kind2()">
                  <option name="kind2" value="0">国別</option>
                  <option name="kind2" value="china" selected="selected">中国</option>
                  <option name="kind2" value="columbia">コロンビア</option>
                  <option name="kind2" value="korea">韓国</option>
                </select>
              </div>
              <div class="col-sm-4 mb-sm-20">
                <select class="form-control" id="kind1" onchange="search_of_kind1()">
                  <option name="kind1" value="0" selected="selected">種類別</option>
                  <option name="kind1" value="alstroemeria">アルストロメリア</option>
                  <option name="kind1" value="carnations">カーネーション</option>
                  <option name="kind1" value="disbed">ディスバッド</option>
                  <option name="kind1" value="kasum">アジサイ＆カスミソウ</option>
                  <option name="kind1" value="rose">バラ</option>
                  <option name="kind1" value="kiku">キク</option>
                  <option name="kind1" value="yuri">ユリ</option>
                  <option name="kind1" value="etc">その他加工品</option>
                </select>
              </div>

          </div>
        </section>
        <hr class="divider-w">
        <section class="module-small">
          <div class="container">
            <div class="row multi-columns-row" id="products">
            </div>
          </div>
        </section>
        
        <?
          include("footer.php");
        ?>
        
    </main>

    <script>
      $(document).ready(function() {
          let items1 = col9();
          let items2 = col10();
          const fileList1 = document.getElementById("products");
          fileList1.innerHTML = items1 + items2;

      });
    </script>
    <script>
      function search_of_kind1() {
        document.getElementById("kind2").options[0].selected = true;
        var a = document.getElementById("kind1");
        var v = a.options[a.selectedIndex].value;
        if (v == "alstroemeria") {
          let items1 = col1();
          const fileList1 = document.getElementById("products");
          fileList1.innerHTML = items1;
        }
        else if (v == "carnations") {
          let items1 = col2();
          const fileList1 = document.getElementById("products");
          fileList1.innerHTML = items1;
        }
        else if (v == "disbed") {
          let items1 = col3();
          const fileList1 = document.getElementById("products");
          fileList1.innerHTML = items1;
        }
        else if (v == "kasum") {
          let items1 = col4();
          const fileList1 = document.getElementById("products");
          fileList1.innerHTML = items1;
        }
        else if (v == "rose") {
          let items1 = col5();
          const fileList1 = document.getElementById("products");
          fileList1.innerHTML = items1;
        }
        else if (v == "kiku") {
          let items1 = col7();
          let items2 = col9();
          const fileList1 = document.getElementById("products");
          fileList1.innerHTML = items1 + items2;
        }
        else if (v == "yuri") {
          let items1 = col8();
          const fileList1 = document.getElementById("products");
          fileList1.innerHTML = items1;
        }
        else if (v == "etc") {
          let items1 = col6();
          let items2 = col10();
          const fileList1 = document.getElementById("products");
          fileList1.innerHTML = items1 + items2;
        }
      }
      function search_of_kind2() {
        document.getElementById("kind1").options[0].selected = true;
        var a = document.getElementById("kind2");
        var v = a.options[a.selectedIndex].value;
        if (v == "columbia") {
          let items1 = col1();
          let items2 = col2();
          let items3 = col3();
          let items4 = col4();
          let items5 = col5();
          let items6 = col6();
          const fileList1 = document.getElementById("products");
          fileList1.innerHTML = items1 + items2 + items3 + items4 + items5 + items6;
        }
        else if (v == "china") {
          let items1 = col9();
          let items2 = col10();
          const fileList1 = document.getElementById("products");
          fileList1.innerHTML = items1 + items2;
        }
        else if (v == "korea") {
          let items1 = col7();
          let items2 = col8();
          const fileList1 = document.getElementById("products");
          fileList1.innerHTML = items1 + items2;
        }
      }
    </script>
    <script>
      // アルストロメリア-columbia
      function col1() {
        var arr1 = ["image75.webp","image76.webp","image77.webp","image78.webp","image79.webp","image80.webp","image81.webp","image82.webp","image83.webp","image84.webp","image85.webp","image86.webp"];
        let items1 = "";
        arr1.forEach((fname) => {
          items1 += `
                <div class="col-sm-6 col-md-3 col-lg-3"">
                  <div class="shop-item">
                    <div class="shop-item-image"><img src="assets/images/product/columbia/alstroemeria/${fname}" alt="アルストロメリア-columbia"/>
                    </div>
                  </div>
                </div>
          `;
        });
        return items1;
      }
      // カーネーション-columbia
      function col2() {
        var arr1 = ["image34.webp","image35.webp","image36.webp","image37.webp","image38.webp","image39.webp","image40.webp","image41.webp","image42.webp","image43.webp","image44.webp","image45.webp","image46.webp","image47.webp","image48.webp","image49.webp","image50.webp","image51.webp","image52.webp","image53.webp","image54.webp","image55.webp","image56.webp","image57.webp","image58.webp","image59.webp","image60.webp","image61.webp","image62.webp","image63.webp","image64.webp","image65.webp","image66.webp","image67.webp","image68.webp","image69.webp","image70.webp","image71.webp","image72.webp","image73.webp","image74.webp"];
        let items1 = "";
        arr1.forEach((fname) => {
          items1 += `
                <div class="col-sm-6 col-md-3 col-lg-3"">
                  <div class="shop-item">
                    <div class="shop-item-image"><img src="assets/images/product/columbia/carnations/${fname}" alt="カーネーション-columbia"/>
                    </div>
                  </div>
                </div>
          `;
        });
        return items1;
      }
      // ディスバッド-columbia
      function col3() {
        var arr1 = ["image87.webp","image88.webp","image89.webp","image90.webp","image91.webp","image92.webp","image93.webp","image94.webp","image95.webp","image96.webp","image97.webp","image98.webp","image99.webp","image100.webp","image101.webp","image102.webp","image103.webp","image104.webp","image105.webp","image106.webp","image107.webp","image108.webp","image109.webp","image110.webp","image111.webp","image112.webp","image113.webp","image114.webp","image115.webp","image116.webp","image117.webp","image118.webp","image119.webp","image120.webp","image121.webp"];
        let items1 = "";
        arr1.forEach((fname) => {
          items1 += `
                <div class="col-sm-6 col-md-3 col-lg-3"">
                  <div class="shop-item">
                    <div class="shop-item-image"><img src="assets/images/product/columbia/disbed/${fname}" alt="ディスバッド-columbia"/>
                    </div>
                  </div>
                </div>
          `;
        });
        return items1;
      }
      // アジサイ＆カスミソウ-columbia
      function col4() {
        var arr1 = ["image137.webp","image138.webp","image139.webp","image140.webp","image141.webp","image142.webp","image143.webp","image144.webp","image145.webp","image146.webp","image147.webp"];
        let items1 = "";
        arr1.forEach((fname) => {
          items1 += `
                <div class="col-sm-6 col-md-3 col-lg-3"">
                  <div class="shop-item">
                    <div class="shop-item-image"><img src="assets/images/product/columbia/etc/${fname}" alt="アジサイ＆カスミソウ-columbia"/>
                    </div>
                  </div>
                </div>
          `;
        });
        return items1;
      }
      // バラ-columbia
      function col5() {
        var arr1 = ["image125.webp","image126.webp","image127.webp","image128.webp","image129.webp","image130.webp","image131.webp","image132.webp","image133.webp","image134.webp","image135.webp","image136.webp","image122.webp","image123.webp","image124.webp"];
        let items1 = "";
        arr1.forEach((fname) => {
          items1 += `
                <div class="col-sm-6 col-md-3 col-lg-3"">
                  <div class="shop-item">
                    <div class="shop-item-image"><img src="assets/images/product/columbia/rose/${fname}" alt="バラ-columbia"/>
                    </div>
                  </div>
                </div>
          `;
        });
        return items1;
      }
      // その他加工品-columbia
      function col6() {
        var arr1 = ["image158.webp","image148.webp","image149.webp","image150.webp","image151.webp","image152.webp","image153.webp","image154.webp","image155.webp","image156.webp","image157.webp"];
        let items1 = "";
        arr1.forEach((fname) => {
          items1 += `
                <div class="col-sm-6 col-md-3 col-lg-3"">
                  <div class="shop-item">
                    <div class="shop-item-image"><img src="assets/images/product/columbia/etc/${fname}" alt="その他加工品-columbia"/>
                    </div>
                  </div>
                </div>
          `;
        });
        return items1;
      }
      // キク-korea
      function col7() {
        var arr1 = ["1.webp","2.webp","3.webp","4.webp","5.webp","6.webp","7.webp","8.webp","9.webp","10.webp","11.webp"];
        let items1 = "";
        arr1.forEach((fname) => {
          items1 += `
                <div class="col-sm-6 col-md-3 col-lg-3"">
                  <div class="shop-item">
                    <div class="shop-item-image"><img src="assets/images/product/korea/kiku/${fname}" alt="キク-korea"/>
                    </div>
                  </div>
                </div>
          `;
        });
        return items1;
      }
      // ユリ-korea
      function col8() {
        var arr1 = ["image8.webp","image9.webp","image10.webp","image11.webp"];
        let items1 = "";
        arr1.forEach((fname) => {
          items1 += `
                <div class="col-sm-6 col-md-3 col-lg-3"">
                  <div class="shop-item">
                    <div class="shop-item-image"><img src="assets/images/product/korea/yuri/${fname}" alt="ユリ-korea"/>
                    </div>
                  </div>
                </div>
          `;
        });
        return items1;
      }
      // キク-china
      function col9() {
        var arr1 = ["image172.webp","image173.webp","image174.webp","image175.webp","image176.webp","image177.webp","image178.webp","image179.webp","image180.webp","image181.webp","image182.webp","image183.webp","image184.webp","image185.webp","image186.webp","image187.webp","image188.webp"];
        let items1 = "";
        arr1.forEach((fname) => {
          items1 += `
                <div class="col-sm-6 col-md-3 col-lg-3"">
                  <div class="shop-item">
                    <div class="shop-item-image"><img src="assets/images/product/china/kiku/${fname}" alt="キク-china"/>
                    </div>
                  </div>
                </div>
          `;
        });
        return items1;
      }
      // その他加工品-china
      function col10() {
        var arr1 = ["image193.webp","image194.webp","image195.webp","image196.webp","image197.webp","image189.webp","image190.webp","image191.webp","image192.webp"];
        let items1 = "";
        arr1.forEach((fname) => {
          items1 += `
                <div class="col-sm-6 col-md-3 col-lg-3"">
                  <div class="shop-item">
                    <div class="shop-item-image"><img src="assets/images/product/china/etc/${fname}" alt="その他加工品-china"/>
                    </div>
                  </div>
                </div>
          `;
        });
        return items1;
      }
    </script>
  </body>
</html>