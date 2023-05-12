nome = input("Digite seu nome: ")
idade = int(input("Digite sua idade: "))
sexo = input("Digite seu sexo (M ou F): ")
peso = float(input("Digite seu peso (em kg): "))
altura = float(input("Digite sua altura (em metros): "))

imc = peso / altura ** 2

print("Nome: ", nome)
print("Idade: ", idade)
print("Sexo: ", sexo)
print("Peso: ", peso, " kg")
print("Altura: ", altura, " m")
print("IMC: {:.1f}".format(imc))

if imc < 18.5:
    print("Abaixo do peso.")
    categoria = "Abaixo do peso"
elif imc < 25:
    print("Peso normal.")
    categoria = "Peso normal"
elif imc < 30:
    print("Sobrepeso.")
    categoria = "Sobrepeso."
elif imc < 35:
    print("Obesidade grau 1.")
    categoria = "Obesidade grau 1"
elif imc < 40:
    print("Obesidade grau 2.")
    categoria = "Obesidade grau 2"
else:
    print("Obesidade grau 3.")
    categoria = "Obesidade grau 3"


with open("dados.txt", "a") as arquivo:
    arquivo.write("Nome: {}\n".format(nome))
    arquivo.write("Idade: {}\n".format(idade))
    arquivo.write("Sexo: {}\n".format(sexo))
    arquivo.write("Peso: {} kg\n".format(peso))
    arquivo.write("Altura: {} m\n".format(altura))
    arquivo.write("IMC: {:.1f}\n".format(imc))
    arquivo.write("Categoria: {}\n".format(categoria))

    arquivo.write("\n")

print("Obrigado por utilizar o programa.")

