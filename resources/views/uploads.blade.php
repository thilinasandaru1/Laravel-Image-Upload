<!DOCTYPE html>
<html>
<head>
    <title>Crop Image</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="/js/jquery.cropit.js"></script>

    <link rel="stylesheet" href="/css/materialize.min.css">


    <style>
        .cropit-preview {
            background-color: #f8f8f8;
            background-size: cover;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-top: 7px;
            width: 250px;
            height: 250px;
        }

        .cropit-preview-image-container {
            cursor: move;
        }

        .image-size-label {
            margin-top: 10px;
        }

        input {
            display: block;
        }

        button[type="submit"] {
            margin-top: 10px;
        }

        #result {
            margin-top: 10px;
            width: 900px;
        }

        #result-data {
            display: block;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
            word-wrap: break-word;
        }

    </style>
</head>
<body>
    <div class="container">
        <h5>Image Upload Example Laravel 7</h5>
        <form action="/" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="image-editor">
                    <div class="col s6">
                        <div class="file-field input-field">
                            <div class="btn">
                                <span>Select Image</span>
                                <input type="file" class="cropit-image-input">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Upload Image">
                            </div>
                        </div>
                    </div>
                    <div class="col s6 offset-s6"></div>

                    <div class="col">
                        <div class="cropit-preview"></div>
                        <div class="image-size-label">
                            Resize image
                        </div>
                    </div>
                    <div class="col s6 offset-s6"></div>
                    <p class="range-field col s6 ">
                        <input type="range" class="cropit-image-zoom-input">
                    </p>
                    <div class="col s12">
                        <input type="hidden" name="image-data" class="hidden-image-data" />
                        <button type="submit" class="waves-effect waves-light btn">Submit</button>
                    </div>
                </div>
            </div>
        </form>


    </div>
    <script>
        $(function() {
            $('.image-editor').cropit();

            $('form').submit(function() {
                // Move cropped image data to hidden input
                var imageData = $('.image-editor').cropit('export');
                $('.hidden-image-data').val(imageData);

            });
        });

    </script>
    <script src="/js/materialize.min.js"></script>
</body>
</html>
