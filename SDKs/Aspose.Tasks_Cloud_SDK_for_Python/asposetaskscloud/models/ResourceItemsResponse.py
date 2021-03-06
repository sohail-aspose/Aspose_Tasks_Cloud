#!/usr/bin/env python

class ResourceItemsResponse(object):
    """NOTE: This class is auto generated by the swagger code generator program.
    Do not edit the class manually."""


    def __init__(self):
        """
        Attributes:
          swaggerTypes (dict): The key is attribute name and the value is attribute type.
          attributeMap (dict): The key is attribute name and the value is json key in definition.
        """
        self.swaggerTypes = {
            'Items': 'ResourceItems',
            'Code': 'str',
            'Status': 'str'

        }

        self.attributeMap = {
            'Items': 'Items','Code': 'Code','Status': 'Status'}       

        self.Items = None # ResourceItems
        self.Code = None # str
        self.Status = None # str
        
