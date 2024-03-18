#from tracemalloc import start

import re


def extract_paper(paper_file_path: str, font_size: int) -> dict:
    # reading the file
    f = open(paper_file_path, "r")
    content = f.read()
    f.close()
    
    
    #get the title
    title = part_finder(content,"TITLE")

    #ABSTRACT
    abstract = part_finder(content,"ABSTRACT")
    #KEYWORDS
    keywords = part_finder(content,"KEYWORDS").split(",")
    #INTRODUCTION
    introduction = part_finder(content,"INTRODUCTION")
    #BODY
    body = part_finder(content,"INTRODUCTION")
    #
    references = re.split("\[[1-9]*\]", part_finder(content,"REFERENCES"))[1:]

    result =  {
        "title" : title,
        "abstract" : abstract,
        "keywords" : keywords,
        "introduction" : introduction,
        "body" : body,
        "references" : references,
        "words_count": len(content.strip().split())
    }
    copyKeywords = keywords.copy()
    sortedCopyKeywords = copyKeywords.sort()
    if len(abstract.split()) > 150 :
        raise Exception("The abstract section can't be more than 150 words")
    if len(keywords) > 5:
        raise Exception("You can't put more than 5 keywords")
    if  keywords != sortedCopyKeywords:
        raise Exception("Keywords are not sorted")
    return result



def find_next_capital_word(content: str):
    capital_letters = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z']
    capital_words = ["TITLE", "ABSTRACT", "KEYWORDS", "INTRODUCTION", "BODY", "REFERENCES"]
    for word in capital_words:
        foundIndex = content.find(word)
        if foundIndex !=  -1:
            return foundIndex
    return -1

def part_finder(content, part):
    partIndex = content.find(part)
    partLength = len(part)
    startIndex = partIndex + partLength + 1
    endIndex = find_next_capital_word(content[startIndex:])
    if endIndex != -1:
        endIndex = endIndex + startIndex
    partContent = content[startIndex: endIndex]
    partContent = partContent.strip()
    return partContent

#a = extract_paper("C:\\Users\Hadi\Desktop\quera\etebar sanji maghale\paper1_sample.txt", 3)
#print(a)

