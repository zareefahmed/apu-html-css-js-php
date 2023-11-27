<?php 
class Page{


    function __construct(){
        $this->PageContent="<h1>This is default page</h1>";
        $this->title=DEFAULT_TITLE;
    }


    function getHeader(){
        ob_start();
        include_once("parts/header.php");        
       return ob_get_clean();         
    }
    function getFooter(){
ob_start();

include_once("parts/footer.php");
return ob_get_clean();
    }
    function getLeftSide(){
        ob_start();
     
        include_once("parts/leftside.php");
    return ob_get_clean(); 
    }
    function getTitle(){
        return $this->title;
    }
    function setTitle($title){
        $this->title=$title;
    }
    function getHead(){

        $Head=<<< HERE

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>{$this->getTitle()} </title>
            <link rel="stylesheet" href="static/css/styles.css">
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        
        </head>
    HERE;

    return $Head;
    }

    function makePage(){

        $PageHead= $this->getHead();
        $PageHeader=$this->getHeader();
        $PageLeftSide=$this->getLeftSide();
        $PageFooter=$this->getFooter();
        $PageContent=$this->getPageContent();


        $FullPageContent=<<< HERE


        <!DOCTYPE html>
        <html lang="en">
        $PageHead
        <body> 
        
        <div class="container">
            <header>
               $PageHeader
            </header>
        
            <main>
                <aside class="sidebar">
                    $PageLeftSide
                </aside>
        
                <section class="content">
                $PageContent
                </section>
            </main>
        
            <footer>
            $PageFooter
        </footer>
        </div>
        
        </body>
        </html>



    HERE;
    print $FullPageContent;

    }

    function setPageContent($PageContent){
        $this->PageContent=$PageContent;
    }
    function getPageContent(){
        return $this->PageContent;
    }


}



?>