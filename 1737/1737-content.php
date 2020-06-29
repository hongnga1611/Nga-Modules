<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1737">
    <div class="container">
        <div class="top-header text-center">
            <h2 class="title">
                What we can offer
            </h2>
            <hr class="solid">
        </div>
        <div class="row">
            <div class="col-md-6 col-ms-12">
                <div class="content d-flex">
                    <span>
                        <i class="font-icon fas fa-comments-dollar ml-2 p-3"></i>
                    </span>
                    <div class="box-content pl-4">
                        <h3 class="title">
                            Nec ullamcorper mattis
                        </h3>

                        <p class="infor-content">
                            Ut elit tellus - luctus nec ullamcorper mattis, pulvinar dapibus leo. Lorem dolor sit amet, consectetur.
                        </p>
                    </div>
                </div>
                <div class="content d-flex">
                    <span>
                        <i class="font-icon fas fa-comments-dollar ml-2 p-3"></i>
                    </span>
                    <div class="box-content pl-4">
                        <h3 class="title">
                            Consectetur elit
                        </h3>
                        <p class="infor-content">
                            Ipsum dolor sit amet. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo nulla.
                        </p>
                    </div>
                </div>
                <div class="content d-flex">
                    <span>
                        <i class="font-icon fas fa-comments-dollar ml-2 p-3"></i>
                    </span>
                    <div class="box-content pl-4">
                        <h3 class="title">
                            Lorem dolor amet
                        </h3>
                        <p class="infor-content">
                            Lorem ipsum dolor sit elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-ms-12">
                <div class="content d-flex">
                    <span>
                        <span>
                            <i class="font-icon fas fa-comments-dollar ml-2 p-3"></i>
                        </span>
                    </span>
                    <div class="box-content pl-4">
                        <h3 class="title">
                            Consectetur elit
                        </h3>
                        <p class="infor-content">
                            Ipsum dolor sit amet. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo nulla.
                        </p>
                    </div>
                </div>
                <div class="content d-flex">
                    <span>
                        <i class="font-icon fas fa-comments-dollar ml-2 p-3"></i>
                    </span>
                    <div class="box-content pl-4">
                        <h3 class="title">
                            Lorem dolor amet
                        </h3>
                        <p class="infor-content">
                            Lorem ipsum dolor sit elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. </p>
                    </div>
                </div>
                <div class="content d-flex">
                    <span>
                        <i class="font-icon fas fa-comments-dollar ml-2 p-3"></i>
                    </span>
                    <div class="box-content pl-4">
                        <h3 class="title">
                            Nec ullamcorper mattis
                        </h3>
                        <p class="infor-content">
                            Ut elit tellus - luctus nec ullamcorper mattis, pulvinar dapibus leo. Lorem dolor sit amet, consectetur.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>