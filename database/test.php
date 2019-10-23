<?php
//디자인 패턴 이라고함 : 객체를 설계하는 형태
//싱글턴 패턴

class Test
{
    private function __construct()
    {
        echo "테스트 객체";
    }

    public static $instance = [];

    public static function make()
    {
        //인스턴스가 객체가 안만들어져 있으면 만들어라.
        //공유 되는걸 플라이웨이트 패턴

        //플라이 웨이트 패턴 = 배열(다중공유)
        //레지스터리 패턴, 컨테이너 라고 표현을 함
        if(!self::$instance){
            self::$instance = new self();    
        }
        return self::$instance;
    }

    public function factory($name)
    {
        return new $name;
        //객체를 생성해 주는 역할.
        //팩토리 패턴 유연하게 만들어놓을걸 수정하기 간편하게
    }

    public function strage(object $algorism)
    { //전략 패턴
        $this -> A = $algorism;
    }
}
