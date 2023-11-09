import javax.xml.transform.stax.StAXResult;

public class he {
    public String id;
    private String name;
    public double gpa;
    public void setID(String id) {
        this.id = id;
    }
    public void setname(String name) {
        this.name = name;
    }
    public void setGPA(double gpa) {
        this.gpa = gpa;
    }
    public void showDetails(){
        System.out.println("ID: "+id);
        System.out.println("Name "+name);
        System.out.println("GPA "+gpa);
    }
    public static void main(String arg[]){
        he s1 = new he();
        he s2 = new he();
        he s3 = new he();
        s1.setID("26677");
        s1.setname("dwa");
        s1.setGPA(2.88);
        s1.showDetails();
        s2.setID("1233");
        s2.setname("payut");
        s2.setGPA(3.55);
        s2.showDetails();
        s3.setID("367");
        s3.setname("Grace");
        s3.setGPA(4.00);
        s3.showDetails();
    }
}