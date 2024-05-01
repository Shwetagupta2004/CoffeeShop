from django.shortcuts import render
from django.http import HttpResponse

# Create your views here.
# def index(request):
#     return HttpResponse("helloo")

def HomePage(request):
    return render(request, 'index.html')
