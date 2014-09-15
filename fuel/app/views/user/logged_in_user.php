<?

?>


<div class='row'>
	<div class='small-12 columns'>
		TESTING
	</div>
</div>


$(document).ready( function() {
  $(document).foundation();

  var products = [{name: "iPad", price: "$499.99", image: "http://lorempixel.com/400/400/technics/1/"},
                  {name: "Technics Some Really Long Name", price: "$499.99", image: "http://lorempixel.com/400/400/technics/2/"},
                  {name: "Netbook", price: "$299.99", image: "http://lorempixel.com/400/400/technics/3/"},
                  {name: "Ear Pods", price: "$29.99", image: "http://lorempixel.com/400/400/technics/5/"},
                  {name: "Sony Headphones", price: "$49.99", image: "http://lorempixel.com/400/400/technics/6/"},
                  {name: "Shure Earbuds", price: "$194.99", image: "http://lorempixel.com/400/400/technics/7/"},
                  {name: "65\" HDTV", price: "$397.99", image: "http://lorempixel.com/400/400/technics/9/"}
  ];

  var output = "<div class=\"row\">";
  var numCols = 3;

  $.each(products, function(index, product) {
    output += "<div class=\"large-4 small-6 columns\"> <img src=\"" + product.image +
              "\"> <div class=\"panel\"> <h5>" + product.name +
              "</h5> <h6 class=\"subheader\">" + product.price + "</h6> </div> </div> "

    // close and open new row when filled

    if (index % numCols === numCols - 1) {
      output += " </div><div class=\"row\"> "
    }

    // if this is the last product, add empty divs to fix formatting

    if (index == products.length - 1) {
      for (var c = 0; c < numCols - 1 - index % numCols; c++) {
        output += "<div class=\"large-4 small-6 columns\"></div>"
      }
    }

  });

  output += "</div>"

  $(".product-listing").html(output);
});

------------------

25$ per person ($50) -- app fee
$50 - cosigner app fee
$100 -- administration fee

($200 in total);

prorate - $464.48 day of move in or pay before hand. $847 -- administration made a mistake in terms of quotes. we should've gotten it when we had the chance.

if we get approved:
sure deposit -- $132.96
depending on approval

$177.28 with conditions, plus half months rent. just half months rent is refundable.

proof of income 2.5x rent 
offer or awards letter as proof of student.
cosigner needs 3x rent 


at the beginning process, we would need to provide proof of students.
2 consecutive pay stubs.
2 separate checks, 1 for application and one for administration.