<?php
    require_once 'formDesign.php';
?>

        <input type="checkbox" id="check1">
        <input type="checkbox" id="check2">
        <input type="checkbox" id="check3">
        <input type="checkbox" id="check4">
        <button onclick="HandleClick()" type="submit" id="submit">Submit</button>

    <script>
        // variables
        const input1 = document.getElementById('input1');
        const input2 = document.getElementById('input2');
        const input3 = document.getElementById('input3');
        const input4 = document.getElementById('input4');

        const check1 = document.getElementById('check1');
        const check2 = document.getElementById('check2');
        const check3 = document.getElementById('check3');
        const check4 = document.getElementById('check4');

        const submit = document.getElementById('submit');


        const HandleClick = ()=>{
            if(check1.checked === true)
            {
                input1.style.display = 'block'
                localStorage.setItem('fname', 'block')
            }else{
                input1.style.display = 'none'
                localStorage.setItem('fname', 'none')
            }

            if(check2.checked === true)
            {
                localStorage.setItem('lname', 'block')
                input2.style.display = 'block'
            }else{
                localStorage.setItem('lname', 'none')
                input2.style.display = 'none'
            }

            if(check3.checked === true)
            {
                localStorage.setItem('subject', 'block')
                input3.style.display = 'block'
            }else{
                localStorage.setItem('subject', 'none')
                input3.style.display = 'none'
            }

            if(check4.checked === true)
            {
                localStorage.setItem('msg', 'block')
                input4.style.display = 'block'
            }else{
                localStorage.setItem('msg', 'none')
                input4.style.display = 'none'
            }
        }
    </script>



