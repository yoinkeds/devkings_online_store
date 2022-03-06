<?php
/* 
    ##  PHP / HTML      Document
    ##  Document title: Orders main
    ##  Author:         Tim Lopes
    ##  Author email    timlopes.work@gmail.com
    ##  Website:        www.timlopes.eu
    ##  Designed for:   Group project
    ##  Project:        Web Development 
    ##  Dated:          February 2022
*/

?>
<section class="page-section" id="contacts">
    <div class="section-container" >
        <div class="section-header">
            <h1>Contacts</h1>
        </div>
        <div class="section-content">
            <div class="column">
                <div class="cant-header">
                    <h4 class="card-title">Contact us</h4>
                </div>
                <div class="card-body">
                    <form action="" class="contact-form">
                        <input type="text" name="inputname" id="inputname" placeholder="Your Name">
                        <input type="text" name="inputemail" id="inputemail" placeholder="Your E-mail">
                        <select name="subject" id="subject" placeholder="Subject" >
                            <option value="geneal" selected>General</option>
                            <option value="services">Services</option>
                            <option value="prcing">Pricing</option>
                            <option value="fault">Report a fault</option>
                        </select>
                        <textarea name="message" id="message" cols="30" rows="10" placeholder="Your Message"></textarea>
                        <button class="form-btn" type="submit"> Send </button>
                    </form>
                </div>
            </div>
            <div class="column">
                <div class="cant-header">
                    <h4 class="card-title">Find us</h4>
                </div>
                <div class="card-body">
                    <iframe class="contact-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9700.018992622156!2d24.471462705100567!3d60.97413385805046!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x468e5d7f1a184209%3A0xe69734d5c10042bd!2sHAMK%20H%C3%A4me%20University%20of%20Applied%20Sciences!5e0!3m2!1sen!2sfi!4v1643249318293!5m2!1sen!2sfi"  style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require_once 'home/footer/big-footer.php'; ?>