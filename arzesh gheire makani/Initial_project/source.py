def game(number):
    strNumber = str(number)
    firstDigit = int(strNumber[0])
    secondDigit = int(strNumber[1])
    if firstDigit >= secondDigit :
        return firstDigit - secondDigit
    return secondDigit - firstDigit
    
