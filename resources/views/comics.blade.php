<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    @vite('resources/js/app.js')
</head>

<body>
    @include('partials.header')

    <div>
        <div class="jumbotron"></div>
        <div class="comics">
            <div class="container-xl">
                <div class="title">
                    <h2>CURRENT SERIES</h2>
                </div>
                <div class="content">
                    
                    <div class="load-btn">
                        <button><strong>LOAD MORE</strong></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.footer')
</body>
</html>