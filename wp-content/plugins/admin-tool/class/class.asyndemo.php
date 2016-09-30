<?php
//require_once '../../wp-async-task-master/wp-async-task.php';
class JPB_Async_Task extends WP_Async_Task {

    protected $action = 'api_status';

    /**
     * Prepare data for the asynchronous request
     *
     * @throws Exception If for any reason the request should not happen
     *
     * @param array $data An array of data sent to the hook
     *
     * @return array
     */
    protected function prepare_data( $data ) {
        return array(
            'api_url' => $data[0]
        );
//        if($data != 'post'){
//            throw new Exception( 'We only want async tasks for posts' );
//            echo 121;
//            die;
//        }
    }

    /**
     * Run the async task action
     */
    protected function run_action() {
//        add_option('gjgtest','asyntest');
        $var = json_encode($_POST);
        do_action("wp_async_$this->action",$var);
//      add_option('gjgtest','asyntest');
//        try{
//            throw new Exception('sorry');
//        }catch(Exception $e){
//            echo $e->getMessage();
//            var_dump(($_POST['api_url']));
//            die;
//
//        }
//        if(isset($_POST['api_url'])){
//            do_action("wp_async_$this->action", $_POST['api_url']);
//        }
    }



}
