<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script>

        var calculator = {
            num1: 0,
            num2: 0,
            add: function() {
                return this.num1 + this.num2;
            },
            subtract: function() {
                return this.num1 - this.num2;
            },
            mulitply: function() {
                return this.num1 * this.num2;
            },
            divide: function() {
                return this.num1 / this.num2;
            }
        }

            var arrGayGuys = [
                "pierce",
                "jan",
                "pongs"
            ];


            var finalString = "";
            for (let index = 0; index < 100; index++) {
                if (index % 2 == 0) {
                    console.log(index + " is an even number.") 
                }
                else if(index % 2 == 0) {
                    console.log(index + " is an odd number.")
                }

                
            }

















        </script>
    <!-- <script>

        var calculator = {
            num1: 0,
            num2: 0,
            add: function(numA, numB) {
                return numA + numB;
            },
            subtract: function(numA, numB) {
                return numA - numB;
            },
            mulitply: function(numA, numB) {
                return numA * numB;
            },
            divide: function(numA, numB) {
                return numA / numB;
            }
        }
        
    </script> -->
    <!-- <script>
        var pierce = {
            gender: "gay",
            heigth: "190cm",
            skin_color: "brown",
            crush: "pong",
            remaining_days: 1,
            is_gay: true,
            work: {
                title: "dev",
                company: "pinky",
            }
        };

        function sayMyname( name ) {
            alert("hello!"+ name)
            
        }
    </script> -->
</head>
<body>
    
</body>
</html>