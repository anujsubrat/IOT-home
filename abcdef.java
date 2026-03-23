interface ax{
    String name="Anuj";
}
class ay implements ax {
    public void ap(){
        System.out.println(name);
    }
}
public class abcdef{
    public static void main(String[]args){
        ay ob=new ay();
        ob.ap();
    }
}