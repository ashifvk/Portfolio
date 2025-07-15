from django.shortcuts import render
from .models import *
from django.http import HttpResponse
from django.http import JsonResponse
import json


def get_client_ip(request):
    x_forwarded_for = request.META.get('HTTP_X_FORWARDED_FOR')
    if x_forwarded_for:
        ip = x_forwarded_for.split(',')[0]
    else:
        ip = request.META.get('REMOTE_ADDR')
    return ip

def home(request):
    ip = get_client_ip(request)
    user_agent = request.META.get('HTTP_USER_AGENT', 'unknown')
    referer = request.META.get('HTTP_REFERER', 'Direct')
    VisitorLog.objects.create(
        ip_address=ip,
        user_agent=user_agent,
        referer=referer
    )
    works = Works.objects.all()
    HW=Works.objects.filter(Type='Horizontal')[:2]
    VW=Works.objects.filter(Type='Vertical')[:3]
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

def works(request):
    works = Works.objects.all()
    print(works)
    return render(request, 'work.html',locals())
