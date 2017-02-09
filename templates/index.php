<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Articles</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="templates/css/style.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <span class="title">Test</span>
            </div>
        </div>
    </div>
</header>

<section class="sorting">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left">
                <form class="form-inline" role="form" action="index.php?controller=index&action=email" method="POST">
                    <div class="form-group">
                        <label>Введите искомый E-mail</label>
                        <input type="text" name="email" class="form-control char" placeholder="E-mail">
                    </div>
                    <button type="submit" class="btn btn-default">Искать</button>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="sorting">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left callouts">
                <?php if ( !empty($this->rusult->email) ) : ?>
                    <span><?php echo $this->rusult->email; ?></span>
                <?php elseif( !empty($this->noresult)  ) : ?>
                    <span>Записей для email <?php echo $this->noresult; ?> не обнаруженно</span>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<footer class="text-center">
    <div class="footer-below">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                </div>
            </div>
        </div>
    </div>
</footer>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
    $('.char').keyup(function(){
        var value = $('.char').val();
        $.ajax({
            type: "GET",
            url: 'index.php?controller=index&action=json',
            data: 'char='+value,
            dataType: "json",
            success: function(data)
            {
                if(data){
                    $('span.addblock').remove();
                    var addBlocks='';
                    $.each(data, function(index, element) {
                        addBlocks += '<span class="addblock">'+element.email+' '+element.name+' '
                            +element.sname+' [ id= '+element.user_id+']'+'</br></span>';
                    });

                    $('.callouts').append(addBlocks);
                    return false;
                }
            }
        });
    });
</script>
</html>