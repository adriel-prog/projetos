public class Main

{
	public static void main(String[] args) {
		carro carro1 = new carro();
		
		carro1.tipo = "FERRARI";
		carro1.cor = "vermelho";
		
		System.out.println("carro1: ");
		System.out.println(carro1.tipo);
		System.out.println(carro1.cor);
		System.out.println(carro1.velocidade(150));
		
		carro carro2 = new carro();
		
		carro2.tipo = "cross";
		carro2.cor = "branco";
		System.out.println("carro2: ");
		System.out.println(carro2.tipo);
		System.out.println(carro2.cor);
		
		System.out.println(carro2.velocidade(180));
		
		
	}
}
