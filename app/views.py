from django.shortcuts import render
from .models import *
from django.http import HttpResponse
def home(request):
    works = Works.objects.all()
    HW=Works.objects.filter(Type='Horizontal')[:2]
    VW=Works.objects.filter(Type='Vertical')[:3]
    print(HW)
    return render(request, 'index.html',locals())

def contact(request):
    try:
        if request.method == 'POST':
            name = request.POST.get('name')
            email = request.POST.get('email')
            subject = request.POST.get('subject')
            message = request.POST.get('message')
            print(name,email,subject,message)
            Contact.objects.create(name=name,email=email,subject=subject,message=message)
            data={'status':1}
    except:
        data={'status':0}
    return HttpResponse({'data':data})