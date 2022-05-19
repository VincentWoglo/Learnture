<?php
    namespace Src\Controller;
    
    class Pagination{

        function Page($Array, $CurrentPage, $ResultPerPage)
        {
            //Get total of array
            $TotalPagination = count($Array);
            $CurrentPage = $_GET['page'];

            if($CurrentPage === " " || $CurrentPage === 0)
            {
                $CurrentPage === 1;
            }

            $ResultPerPage = $ResultPerPage;
            $Total = ceil($TotalPagination / $ResultPerPage);
            $Offset = ($CurrentPage - 1) * $ResultPerPage;

            $PrintPagination = array_slice($Array, $Offset, $ResultPerPage);
            
            
            for($Zero = 1; $Zero<=$Total; $Zero++)
            {
                echo '<a href="Search.php?page='.$Zero.'">'.$Zero.'</a>';
            }
        }

        function PageIntoQueue($ArrayOrganized, $hg){
            $Queue = new \Ds\Queue();
            for($Start = 0; $Start < count($ArrayOrganized); $Start++){
                if($ArrayOrganized[$Start]["score"] === $hg[$Start]){
                    $Queue->push(
                        array(
                            "title"=>$ArrayOrganized[$Start]["title"],
                            "description"=>$ArrayOrganized[$Start]["description"],
                            "category"=>$ArrayOrganized[$Start]["category"],
                            "date"=>$ArrayOrganized[$Start]["date"],
                        )
                    );
                }
            }
            return $Queue->toArray();
        }

        function DisplayQueue($ArrayQueue){
            $FinalArrayQueue = [];
            
            for($Low = 0; $Low < count($ArrayQueue); $Low++){
                array_push($FinalArrayQueue, [
                    "Title" => $ArrayQueue[$Low]["title"],
                    "Description" => $ArrayQueue[$Low]["description"],
                    "Category" => $ArrayQueue[$Low]["category"],
                    "Date" => $ArrayQueue[$Low]["date"]
                ]);
            }

            return $FinalArrayQueue;
            //$url = $_SERVER['REQUEST_URI'];
            //$url = explode("/", $url);
        }
    }
?>