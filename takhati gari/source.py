print(' '.join(sorted([i.upper() if (ord(i) - 97) % 2 != 0 else i for i in input()], reverse=True)))
