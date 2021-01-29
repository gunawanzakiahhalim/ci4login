<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors" />
    <meta name="generator" content="Hugo 0.75.1" />
    <title>Panduan Solusi Pertamina 135</title>

    <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/dashboard/" />

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet" />


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="<?= base_url(); ?>/assets/css/dashboard.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>/assets/css/style.css" rel="stylesheet" />
</head>

<body>

    <?= $this->include('templatespansol/topbar'); ?>
    <?= $this->include('templatespansol/sidebar'); ?>

    <?= $this->renderSection('page-content'); ?>

    <script src="<?= base_url(); ?>/assets/js/bootstrap.bundle.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.24.1/feather.min.js" integrity="sha384-EbSscX4STvYAC/DxHse8z5gEDaNiKAIGW+EpfzYTfQrgIlHywXXrM9SUIZ0BlyfF" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" integrity="sha384-i+dHPTzZw7YVZOx9lbH5l6lP74sLRtMtwN2XjVqjf3uAGAREAF4LMIUDTWEVs4LI" crossorigin="anonymous"></script>
    <script src="<?= base_url(); ?>/assets/js/dashboard.js"></script>
    <script src="<?= base_url(); ?>/assets/js/script.js"></script>
    <script>
        function previewImg() {
            const status = document.querySelector('#status');
            const imgPreview = document.querySelector('.img-preview');

            const fileStatus = new FileReader();
            fileStatus.readAsDataURL(status.files[0]);

            fileStatus.onload = function(e) {
                imgPreview.src = e.target.result;
            }
        }
    </script>
</body>

</html>