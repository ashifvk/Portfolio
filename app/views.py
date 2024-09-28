from django.shortcuts import render
from .models import *
from django.http import HttpResponse
from django.http import JsonResponse
import json
def home(request):
    works = Works.objects.all()
    HW=Works.objects.filter(Type='Horizontal')[:2]
    VW=Works.objects.filter(Type='Vertical')[:3]
    print(HW)
    return render(request, 'index.html',locals())

def contact(request):
    data = {'status': 0}  
    try:
        if request.method == 'POST':
            body_unicode = request.body.decode('utf-8')
            body_data = json.loads(body_unicode)

            name = body_data.get('name')
            email = body_data.get('email')
            message = body_data.get('message')
            phone = body_data.get('phone')
            print(name, email, phone, message)
            Contact.objects.create(name=name, email=email, phone=phone, message=message)
            data = {'status': 1}
    except Exception as e:
        print(f"Error: {e}")

    return JsonResponse(data)
