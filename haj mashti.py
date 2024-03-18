reshte = input()


def laghab(s):
    if s[0] == 'Y':
        return "Haji"
    if s[1] == "Y":
        return "Karbalaee"
    if s[2] == "Y":
        return "Mashti"
    return "Agha"

print(laghab(reshte))

    
