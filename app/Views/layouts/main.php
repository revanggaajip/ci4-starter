
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
        <title><?= $this->renderSection('title')?></title>
        <link rel="stylesheet" href="/css/style.css">
        <?= $this->renderSection('styles'); ?>
    </head>
    <body class="app">
        <!-- #Loader =========================== -->
        <?= $this->include('layouts/components/loader'); ?>
        <div>
            <!-- #Left Sidebar ==================== -->
            <?= $this->include('layouts/components/sidebar'); ?>


            <!-- #Main ============================ -->
            <div class="page-container">
                <!-- ### $Topbar ### -->

                
                <!-- ### $App Screen Content ### -->
                <main class="main-content bgc-grey-100">
                    <div id="mainContent">
                        <div class="container-fluid">
                            <?= $this->renderSection('content'); ?>
                        </div>
                    </div>
                </main>
            
                <!-- ### $App Screen Footer ### -->
                <?= $this->include('footer'); ?>
            </div>
        </div>
    <script defer="defer" src="/js/main.js"></script>
    <?= $this->renderSection('scripts');?>
    </body>
</html>
