<?php
/* 
    ##  PHP / HTML      Document
    ##  Document title: footer
    ##  Author:         Tim Lopes
    ##  Author email    timlopes.work@gmail.com
    ##  Website:        www.timlopes.eu
    ##  Designed for:   Group project
    ##  Project:        Web Development 
    ##  Dated:          February 2022
*/
?>
    <!-- Closing the main page section --->
    </section>
    <!--
    <script type="text/javascript" src="assets/plugins/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/plugins/js/jquery-3.6.0.min.js"></script>
    --->
    <script type="text/javascript" src="../assets/js/main.js"></script>
    <script type="text/javascript" >
        const selectCateegories = (sc_data)=>{
            console.log(sc_data);
            let setcat =sc_data;
            const catform = document.querySelector('#catform');
            catform.addEventListener('submit', (e)=>{
                e.preventDefault;
                return false;
            });
        }
    </script>
</body>
</html>
