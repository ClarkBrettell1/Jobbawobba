<?php
    
    /**
     * @param $conn
     * @param $id
     * @return array|null
     */
    
    function getArticle($conn, $id)
    {
        $sql = " SELECT *
                 FROM article
                 WHERE ID = ?";
        
        $stmt = mysqli_prepare($conn, $sql);
        
        if ($stmt === false) {
            echo mysqli_error($conn);
        } else {
            mysqli_stmt_bind_param($stmt, "i", $id);
            if (mysqli_stmt_execute($stmt)) {
                
                $result = mysqli_stmt_get_result($stmt);
                
                return mysqli_fetch_array($result, MYSQLI_ASSOC);
                
            }
        }
    }
    
    
    
    /**
     * @param string $title
     * @param string $content
     * @param string $published_at
     * @return array
     */
    function validateArticle($title, $content, $published_at)
    {
        $errors = [];
        
        if ($title == '') {
            $error[] = 'title is required';
        }
        if ($content == '') {
            $error[] = 'content is required';
        }
        if ($published_at != '') {
            $date_time = date_create_from_format('d-m-Y', $published_at);
            print_r($_POST);
            if ($date_time === false) {
                $errors[] = 'Invalid Data and Time';
            } else {
                $date_errors = date_get_last_errors();
                
                if ($date_errors['Warning_count'] > 0) {
                    print_r($_POST);
                    $errors[] = 'Invalid date and time';
                }
            }
            
        }
        return $errors;
    }