def textoamorse (texto):
    lista_morse = ['· —','— · · ·','— · — ·','— · ·','·','· · — ·','— — ·','· · · ·','· ·','· — — —','— · —','· — · ·',
    '— —','— ·','— — —','· — — ·','— — · —','· — ·','· · ·','—','· · —','· · · —','· — —','	— · · —','— · — —','— — · ·']

    lista_letras = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z']
    mensaje = []


    for letra in texto:
        if letra == '':
            continue
        else:
            mensaje.append(lista_morse[lista_letras.index(letra)])
            mensaje.append(' ')
                

    return mensaje

def morseatexto (morse):
    lista_morse = ['· —','— · · ·','— · — ·','— · ·','·','· · — ·','— — ·','· · · ·','· ·','· — — —','— · —','· — · ·',
    '— —','— ·','— — —','· — — ·','— — · —','· — ·','· · ·','—','· · —','· · · —','· — —','	— · · —','— · — —','— — · ·']

    lista_letras = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z']
    mensaje = []


    for codigo in morse:
        if codigo == '':
            continue
        else:
            mensaje.append(lista_letras[lista_morse.index(codigo)])
            mensaje.append(' ')
                

    return mensaje

def main ():
    try:
    
        num = input("Digite 1 si desea ver de texto a morse o 2 si de morse a texto :")

        if (num == '1'):
            texto = input("Digite el texto que desea ver en mayuscula: ")
            texto_morse = textoamorse(texto)
            for codigo in texto_morse:
                print(codigo, end= '')
            print()
        elif (num == '2'):
            morse = input("Digite el morse que desea ver: ")
            morse_texto = morseatexto(morse)
            for codigo in morse_texto:
                print(codigo, end= '')
            print()
        else:
            print('El numero no corresponde')
        

    except ValueError:
        print("ERROR")
		
if __name__ == '__main__':
	main()