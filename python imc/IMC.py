nome = input("Digite seu nome: ")
idade = int(input("Digite sua idade: "))
sexo = input("Digite seu sexo (M ou F): ")
peso = float(input("Digite seu peso (em kg): "))
altura = float(input("Digite sua altura (em metros): "))
imc = peso / altura**2
print("Nome: ", nome, "\nIdade: ", idade, "\nSexo: ", sexo, "\nPeso: ", peso, "\nAltura: ", altura, "\nIMC: ", imc)
print("O IMC é {:.1f}.".format(imc))
if imc < 18.5:
    print("Abaixo do peso.")
elif imc < 25:
    print("Peso normal.")
elif imc < 30:
    print("Sobrepeso.")
elif imc < 35:
    print("Obesidade grau 1.")
elif imc < 40:
    print("Obesidade grau 2.")
else:
    print("Obesidade grau 3.")
print("Obrigado por utilizar o programa.")

with open("dados.txt", "a") as arquivo:
    arquivo.write("Nome: {}\n".format(nome))
    arquivo.write("Idade: {}\n".format(idade))
    arquivo.write("Sexo: {}\n".format(sexo))
    arquivo.write("Peso: {} kg\n".format(peso))
    arquivo.write("Altura: {} m\n".format(altura))
    arquivo.write("IMC: {:.1f}\n".format(imc))
    arquivo.write("\n")
