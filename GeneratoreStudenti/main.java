import java.util.Random;

public class main{
    public static void main(String args[]){
    int matricola = 100000;
    Random generator = new Random();
    int randomIndexNomi,randomIndexCognomi,randomIndexPrefisso,randomIndexNumeri,randomIndexVia,randomIndexVia2,civico,randomIndexCitta;
    
    String[] nomi = {"Nikole", "Stefano", "Stella", "Beniamino", "Loris", "Cornelia", "Carola", "Henryk", "Edmond","Venceslao", "Umberto", "Agatino", "Vincenzo", "Tommaso","Pio", "Ennio", "Saveria", "Regina", "Vincenza" };
    String[] cognomi = {"Gallo","Mitchell","Lucas","Mason","Perez","Martin","Miller","Lombardi","Barbieri","Russo","Fontana","Colombo","Rinaldi","Mancini","Greco","Ferrari"};
    
    String[] prefisso = {"0131","0141",	"0142","0143","0144","015","0161","0163","0165","0166","0171","0172","0173","0174","041",	"0421","0422","0424","049","050","051","0521","0522","0523","0524","0525","0532","0533","0534","0535","0536","0541","0542","0543","0544","0545","0546","0547","055","0564","0565","0566","0571","0572","0573","0574","0575","0577","0578","0583","0584","0585","0586","0587","0588","059","06","0984","0985","0873"};
    
    String [] numeri = {"-555-95","-5557-57","5559-3046","-0155-5137","-2555-72","-5553-4364","0555-7893","2555-89","2555-5008","-5559-61","-5555-4442","1555-4097","-5553-480","5553-0419","-2555-495","-5552-226","5553-1334","-5555-296","-5554-872","-1555-72","-1555-25","-5558-2398","-0155-543","-5555-4947","-5552-50","-5556-1973","-5558-037","-5553-02","-5552-493","-5558-37","-5555-9171","-5555-532","-0555-61","-5556-05","-5554-07","-5559-1507","-5555-2493","-0555-589","-5554-1932","-1555-4182"};
    String [] citta ={"Ferrara","Padova","Rovigo","Bologna","Venezia","Vicenza","Ravenna","Modena"};
    String[] via = {"Via","Corso","Piazza","Viale"};
    String[] via2={"Vesuvio","Magellano","Garibaldi","Ateneo","Accademia","Verdi", "Raffaello","Dante", "Marco Polo","Costantino","Traiano","Giulio Cesare", "Roma","Augusto","Cristoforo Colombo","Enrico Fermi","Cesare Battisti","Piave","Virgilio","Goffredo Mameli","Foscolo","Don Bosco","Alcide De Gasperi"};
    String[] cap = {"44121","35121","45100","40121","30100","36100","48121","41121"};
    for(int i = 0; i < 100; i++){
        randomIndexNomi = generator.nextInt(nomi.length);
        randomIndexCognomi = generator.nextInt(cognomi.length);
        randomIndexPrefisso= generator.nextInt(prefisso.length);
        randomIndexNumeri = generator.nextInt(numeri.length);
        randomIndexVia = generator.nextInt(via.length);
        randomIndexVia2 = generator.nextInt(via2.length);
        randomIndexCitta = generator.nextInt(citta.length);
        civico = generator.nextInt(80);
        matricola++;
        System.out.println("INSERT INTO STUDENTE VALUES('0000"+matricola+"','"+ nomi[randomIndexNomi]+"','"+ cognomi[randomIndexCognomi]+"','"+ prefisso[randomIndexPrefisso]+numeri[randomIndexNumeri]+"','"+ via[randomIndexVia]+" "+via2[randomIndexVia2]+"','"+ civico +"','"+ cap[randomIndexCitta]+"','"+citta[randomIndexCitta]+"');");
    }
    }
}