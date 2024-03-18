def game(number):
    strNumber = str(number)
    first = int(strNumber[0])
    second = int(strNumber[1])
    if first >= second:
        return first - second
    return second - first
