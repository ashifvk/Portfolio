from django.contrib import admin
from .models import *
from django.utils.safestring import mark_safe
# Register your models here.
class workadmin(admin.ModelAdmin):
    list_display = ('image_preview','title','description','url')

    def image_preview(self, obj):
        if obj.image:
            return mark_safe('<img src="{url}" width="100" height="100" />'.format(
                url = obj.image.url,
                width=obj.image.width,
                height=obj.image.height,
            )
        )
        return '(No image)'
    image_preview.short_description = 'Image'
admin.site.register(Works,workadmin)
admin.site.register(Contact)