<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./bootstrap.min.css"/>
    <title>Document</title>
</head>
<body>
    <form action ='interact.php' class='container w-75' onchange="addInDel()">
        <div>Enter numbers separate by spacing</div>
        <input type="text" name="num" class='form-control'/>
        <select name="method" id='method' class='custom-select w-25' >
            <option value="show">Only show</option>
            <option value="max">Max</option>
            <option value="average">Average</option>
            <option value="primemax">Prime max</option>
            <option value="symmetry">Symmetry</option>
            <option value="delete">Delete</option>
            <option value="deleteSame">Delete Same Number</option>
        </select>
        
        <input type="submit" name='submit' value="submit" class='btn btn-primary my-3'/>
        <input type="text" name="inDel" id="inDel" class='form-control w-50 d-none ' placeholder="Positions separate by spacing"/>
        
    </form>
    <script>
        function addInDel(){
            console.log('done');
            method = document.getElementById('method');
            inDel = document.getElementById('inDel');


            if(method.value == 'delete') {
                inDel.classList.remove('d-none');
            }else{
                inDel.classList.add('d-none');
            }
        }
        
        
    </script>
</body>
</html>