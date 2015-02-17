<?php
include ('professors-header.php');
include ('professors-navbar-fixed-dashboard.php');
include ('professors-nav-sidebar-dashboard-modify-compact.php');
?>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header"><span class="glyphicon glyphicon-pencil"></span> Modifier la convention de stage</h1>
    <!-- Place inside the <head> of your HTML -->
    <script type="text/javascript" src="../tinymce/js/tinymce/tinymce.min.js"></script>
    <script type="text/javascript">
        tinymce.init({
            language: "fr_FR",
            width: 1000,
            height: 300,
language : "fr_FR",/*
    plugins: "save",
    toolbar: "save | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
    save_enablewhendirty: true,
    save_onsavecallback: function() {console.log("Save");},*/
        
         selector: "textarea",
        plugins: [
                "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
                "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                "table contextmenu directionality emoticons template textcolor paste fullpage textcolor colorpicker textpattern"
        ],

        toolbar1: " fullpage | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
        toolbar2: "cut copy paste | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media code | insertdatetime preview | forecolor backcolor",
        toolbar3: "table | hr removeformat | charmap | print | ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak",

        menubar: false,
        toolbar_items_size: 'small',

        style_formats: [
                {title: 'Bold text', inline: 'b'},
                {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                {title: 'Example 1', inline: 'span', classes: 'example1'},
                {title: 'Example 2', inline: 'span', classes: 'example2'},
                {title: 'Table styles'},
                {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
        ],

        templates: [
                {title: 'Test template 1', content: 'Test 1'},
                {title: 'Test template 2', content: 'Test 2'}
        ]

 });

    </script>


    <!-- Place this in the body of the page content -->
    <form name="" method="" action="" >
        <textarea></textarea>
        
        <br/>
        
        <p class="center"><button class="btn btn-primary btn-lg" type="submit"><span class="glyphicon glyphicon-floppy-save"></span> Enregistrer</button></p>
    </form>
</div><!--no delete-->
</div><!--no delete-->
</div><!--no delete-->
<?php
include ('professors-footer.php');
?>