<!-- common_header -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
    <style>
        .my_container{
    width: 80%;
    margin: auto;
    font-size: 30px;
}
    .font_16{
    font-size: 20px;
}
#root{
    /* width: 90%; */
    margin: auto;
    height: 500px;
    justify-content: center;
    align-items: center;
    /* background-color: #100f0f; */
    display: flex;
    flex-direction: column;
    /* font-size: 16px !important; */
}
button:hover{
    background: rgb(154, 27, 233);
    /* #47c415 */
}
h3 {
    text-shadow: 2px 2px 8px #f0ecec, 2px 2px 8px #ece5e5, 2px 2px 8px #ece5e5, 2px 2px 8px #ece5e5;
    text-align: center;
  }
  .itc{
    color: aquamarine;
  }
    </style>
<body>

   <!--Start my_container -->
   <div class="my_container">
    <pre>
    let table = 4;
    let chair = 5;
    let bed   = 6;

    function woodCalculator(table, chair, bed){
        let wood_table = table * 15
        let wood_chair = chair * 10
        let wood_bed = bed * 30

        return total_wood = wood_table + wood_chair + wood_bed;
    }
    console.log(woodCalculator(table, chair, bed))
    </pre>
   </div>
</body>
</html>