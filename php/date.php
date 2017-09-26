<!DOCTYPE html>
<html>
    <head>
        <title>Today's Date</title>
    </head>
    <body>
    Today's date is <?php



    echo date(DATE_RFC2822);




    ?> <br/>
    The day of the week is <?php echo date('l, F j'); ?><br />
    This is the <?=date('z')?>th day of the year
    </body>
</html>

ely.marrero@gmail.com
