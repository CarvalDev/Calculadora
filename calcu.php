<?php





class Calculadora {
    public $tela;
    public $num;
    public $cookieContent;
    public $cookieName = "cont";
    public $conteudo;
    public $i;
    

    function escreve($display, $num)
    {   
        $this->tela = $display;
        $this->num = $num;
        $this->conteudo = $this->tela.$this->num;
        return  $this->conteudo;
    }

   
    
    public function apaga(){
        return "";
    }

    public function operacao($dy){
        
        $naTela2 = (int)$dy;
         
        switch($_COOKIE['op']){
            case "+": 
                return $_COOKIE['cont']+$naTela2;
                break;
            case "-":
                return $_COOKIE['cont']-$naTela2;
                break;
            case "*":
             
                return $_COOKIE['cont']*$naTela2;
            
                break;
            case "/":
                if($naTela2==0){
                    return "?";
                }else{
                return $_COOKIE['cont']/$naTela2;
                break;
            }
        }
    }
    
        
    }


    class Cookies extends Calculadora{
        public $cv2;
        public $ci2="op";
    
        function setar($cOp,$ckV)
        {
            
            $this->cv2 = $cOp;
            for($this->i==0;$this->i<2;$this->i++){
            setcookie($this->ci2, $this->cv2, time()+(84000*30), "/"); 
            $this->conteudo = $ckV;
            setcookie($this->cookieName, $this->conteudo, time()+(84000*30), "/");
            
        } 
            
             
        } 
    }
    
 


?>