package com.google.cloud.channel.v1;

import static io.grpc.MethodDescriptor.generateFullMethodName;

/**
 * <pre>
 * CloudChannelService lets Google cloud resellers and distributors manage
 * their customers, channel partners, entitlements, and reports.
 * Using this service:
 * 1. Resellers and distributors can manage a customer entity.
 * 2. Distributors can register an authorized reseller in their channel and
 *    provide them with delegated admin access.
 * 3. Resellers and distributors can manage customer entitlements.
 * CloudChannelService exposes the following resources:
 * - [Customer][google.cloud.channel.v1.Customer]s: An entity—usually an enterprise—managed by a reseller or
 * distributor.
 * - [Entitlement][google.cloud.channel.v1.Entitlement]s: An entity that provides a customer with the means to use
 * a service. Entitlements are created or updated as a result of a successful
 * fulfillment.
 * - [ChannelPartnerLink][google.cloud.channel.v1.ChannelPartnerLink]s: An entity that identifies links between
 * distributors and their indirect resellers in a channel.
 * </pre>
 */
@javax.annotation.Generated(
    value = "by gRPC proto compiler",
    comments = "Source: google/cloud/channel/v1/service.proto")
public final class CloudChannelServiceGrpc {

  private CloudChannelServiceGrpc() {}

  public static final String SERVICE_NAME = "google.cloud.channel.v1.CloudChannelService";

  // Static method descriptors that strictly reflect the proto.
  private static volatile io.grpc.MethodDescriptor<com.google.cloud.channel.v1.ListCustomersRequest,
      com.google.cloud.channel.v1.ListCustomersResponse> getListCustomersMethod;

  @io.grpc.stub.annotations.RpcMethod(
      fullMethodName = SERVICE_NAME + '/' + "ListCustomers",
      requestType = com.google.cloud.channel.v1.ListCustomersRequest.class,
      responseType = com.google.cloud.channel.v1.ListCustomersResponse.class,
      methodType = io.grpc.MethodDescriptor.MethodType.UNARY)
  public static io.grpc.MethodDescriptor<com.google.cloud.channel.v1.ListCustomersRequest,
      com.google.cloud.channel.v1.ListCustomersResponse> getListCustomersMethod() {
    io.grpc.MethodDescriptor<com.google.cloud.channel.v1.ListCustomersRequest, com.google.cloud.channel.v1.ListCustomersResponse> getListCustomersMethod;
    if ((getListCustomersMethod = CloudChannelServiceGrpc.getListCustomersMethod) == null) {
      synchronized (CloudChannelServiceGrpc.class) {
        if ((getListCustomersMethod = CloudChannelServiceGrpc.getListCustomersMethod) == null) {
          CloudChannelServiceGrpc.getListCustomersMethod = getListCustomersMethod =
              io.grpc.MethodDescriptor.<com.google.cloud.channel.v1.ListCustomersRequest, com.google.cloud.channel.v1.ListCustomersResponse>newBuilder()
              .setType(io.grpc.MethodDescriptor.MethodType.UNARY)
              .setFullMethodName(generateFullMethodName(SERVICE_NAME, "ListCustomers"))
              .setSampledToLocalTracing(true)
              .setRequestMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.cloud.channel.v1.ListCustomersRequest.getDefaultInstance()))
              .setResponseMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.cloud.channel.v1.ListCustomersResponse.getDefaultInstance()))
              .setSchemaDescriptor(new CloudChannelServiceMethodDescriptorSupplier("ListCustomers"))
              .build();
        }
      }
    }
    return getListCustomersMethod;
  }

  private static volatile io.grpc.MethodDescriptor<com.google.cloud.channel.v1.GetCustomerRequest,
      com.google.cloud.channel.v1.Customer> getGetCustomerMethod;

  @io.grpc.stub.annotations.RpcMethod(
      fullMethodName = SERVICE_NAME + '/' + "GetCustomer",
      requestType = com.google.cloud.channel.v1.GetCustomerRequest.class,
      responseType = com.google.cloud.channel.v1.Customer.class,
      methodType = io.grpc.MethodDescriptor.MethodType.UNARY)
  public static io.grpc.MethodDescriptor<com.google.cloud.channel.v1.GetCustomerRequest,
      com.google.cloud.channel.v1.Customer> getGetCustomerMethod() {
    io.grpc.MethodDescriptor<com.google.cloud.channel.v1.GetCustomerRequest, com.google.cloud.channel.v1.Customer> getGetCustomerMethod;
    if ((getGetCustomerMethod = CloudChannelServiceGrpc.getGetCustomerMethod) == null) {
      synchronized (CloudChannelServiceGrpc.class) {
        if ((getGetCustomerMethod = CloudChannelServiceGrpc.getGetCustomerMethod) == null) {
          CloudChannelServiceGrpc.getGetCustomerMethod = getGetCustomerMethod =
              io.grpc.MethodDescriptor.<com.google.cloud.channel.v1.GetCustomerRequest, com.google.cloud.channel.v1.Customer>newBuilder()
              .setType(io.grpc.MethodDescriptor.MethodType.UNARY)
              .setFullMethodName(generateFullMethodName(SERVICE_NAME, "GetCustomer"))
              .setSampledToLocalTracing(true)
              .setRequestMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.cloud.channel.v1.GetCustomerRequest.getDefaultInstance()))
              .setResponseMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.cloud.channel.v1.Customer.getDefaultInstance()))
              .setSchemaDescriptor(new CloudChannelServiceMethodDescriptorSupplier("GetCustomer"))
              .build();
        }
      }
    }
    return getGetCustomerMethod;
  }

  private static volatile io.grpc.MethodDescriptor<com.google.cloud.channel.v1.CheckCloudIdentityAccountsExistRequest,
      com.google.cloud.channel.v1.CheckCloudIdentityAccountsExistResponse> getCheckCloudIdentityAccountsExistMethod;

  @io.grpc.stub.annotations.RpcMethod(
      fullMethodName = SERVICE_NAME + '/' + "CheckCloudIdentityAccountsExist",
      requestType = com.google.cloud.channel.v1.CheckCloudIdentityAccountsExistRequest.class,
      responseType = com.google.cloud.channel.v1.CheckCloudIdentityAccountsExistResponse.class,
      methodType = io.grpc.MethodDescriptor.MethodType.UNARY)
  public static io.grpc.MethodDescriptor<com.google.cloud.channel.v1.CheckCloudIdentityAccountsExistRequest,
      com.google.cloud.channel.v1.CheckCloudIdentityAccountsExistResponse> getCheckCloudIdentityAccountsExistMethod() {
    io.grpc.MethodDescriptor<com.google.cloud.channel.v1.CheckCloudIdentityAccountsExistRequest, com.google.cloud.channel.v1.CheckCloudIdentityAccountsExistResponse> getCheckCloudIdentityAccountsExistMethod;
    if ((getCheckCloudIdentityAccountsExistMethod = CloudChannelServiceGrpc.getCheckCloudIdentityAccountsExistMethod) == null) {
      synchronized (CloudChannelServiceGrpc.class) {
        if ((getCheckCloudIdentityAccountsExistMethod = CloudChannelServiceGrpc.getCheckCloudIdentityAccountsExistMethod) == null) {
          CloudChannelServiceGrpc.getCheckCloudIdentityAccountsExistMethod = getCheckCloudIdentityAccountsExistMethod =
              io.grpc.MethodDescriptor.<com.google.cloud.channel.v1.CheckCloudIdentityAccountsExistRequest, com.google.cloud.channel.v1.CheckCloudIdentityAccountsExistResponse>newBuilder()
              .setType(io.grpc.MethodDescriptor.MethodType.UNARY)
              .setFullMethodName(generateFullMethodName(SERVICE_NAME, "CheckCloudIdentityAccountsExist"))
              .setSampledToLocalTracing(true)
              .setRequestMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.cloud.channel.v1.CheckCloudIdentityAccountsExistRequest.getDefaultInstance()))
              .setResponseMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.cloud.channel.v1.CheckCloudIdentityAccountsExistResponse.getDefaultInstance()))
              .setSchemaDescriptor(new CloudChannelServiceMethodDescriptorSupplier("CheckCloudIdentityAccountsExist"))
              .build();
        }
      }
    }
    return getCheckCloudIdentityAccountsExistMethod;
  }

  private static volatile io.grpc.MethodDescriptor<com.google.cloud.channel.v1.CreateCustomerRequest,
      com.google.cloud.channel.v1.Customer> getCreateCustomerMethod;

  @io.grpc.stub.annotations.RpcMethod(
      fullMethodName = SERVICE_NAME + '/' + "CreateCustomer",
      requestType = com.google.cloud.channel.v1.CreateCustomerRequest.class,
      responseType = com.google.cloud.channel.v1.Customer.class,
      methodType = io.grpc.MethodDescriptor.MethodType.UNARY)
  public static io.grpc.MethodDescriptor<com.google.cloud.channel.v1.CreateCustomerRequest,
      com.google.cloud.channel.v1.Customer> getCreateCustomerMethod() {
    io.grpc.MethodDescriptor<com.google.cloud.channel.v1.CreateCustomerRequest, com.google.cloud.channel.v1.Customer> getCreateCustomerMethod;
    if ((getCreateCustomerMethod = CloudChannelServiceGrpc.getCreateCustomerMethod) == null) {
      synchronized (CloudChannelServiceGrpc.class) {
        if ((getCreateCustomerMethod = CloudChannelServiceGrpc.getCreateCustomerMethod) == null) {
          CloudChannelServiceGrpc.getCreateCustomerMethod = getCreateCustomerMethod =
              io.grpc.MethodDescriptor.<com.google.cloud.channel.v1.CreateCustomerRequest, com.google.cloud.channel.v1.Customer>newBuilder()
              .setType(io.grpc.MethodDescriptor.MethodType.UNARY)
              .setFullMethodName(generateFullMethodName(SERVICE_NAME, "CreateCustomer"))
              .setSampledToLocalTracing(true)
              .setRequestMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.cloud.channel.v1.CreateCustomerRequest.getDefaultInstance()))
              .setResponseMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.cloud.channel.v1.Customer.getDefaultInstance()))
              .setSchemaDescriptor(new CloudChannelServiceMethodDescriptorSupplier("CreateCustomer"))
              .build();
        }
      }
    }
    return getCreateCustomerMethod;
  }

  private static volatile io.grpc.MethodDescriptor<com.google.cloud.channel.v1.UpdateCustomerRequest,
      com.google.cloud.channel.v1.Customer> getUpdateCustomerMethod;

  @io.grpc.stub.annotations.RpcMethod(
      fullMethodName = SERVICE_NAME + '/' + "UpdateCustomer",
      requestType = com.google.cloud.channel.v1.UpdateCustomerRequest.class,
      responseType = com.google.cloud.channel.v1.Customer.class,
      methodType = io.grpc.MethodDescriptor.MethodType.UNARY)
  public static io.grpc.MethodDescriptor<com.google.cloud.channel.v1.UpdateCustomerRequest,
      com.google.cloud.channel.v1.Customer> getUpdateCustomerMethod() {
    io.grpc.MethodDescriptor<com.google.cloud.channel.v1.UpdateCustomerRequest, com.google.cloud.channel.v1.Customer> getUpdateCustomerMethod;
    if ((getUpdateCustomerMethod = CloudChannelServiceGrpc.getUpdateCustomerMethod) == null) {
      synchronized (CloudChannelServiceGrpc.class) {
        if ((getUpdateCustomerMethod = CloudChannelServiceGrpc.getUpdateCustomerMethod) == null) {
          CloudChannelServiceGrpc.getUpdateCustomerMethod = getUpdateCustomerMethod =
              io.grpc.MethodDescriptor.<com.google.cloud.channel.v1.UpdateCustomerRequest, com.google.cloud.channel.v1.Customer>newBuilder()
              .setType(io.grpc.MethodDescriptor.MethodType.UNARY)
              .setFullMethodName(generateFullMethodName(SERVICE_NAME, "UpdateCustomer"))
              .setSampledToLocalTracing(true)
              .setRequestMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.cloud.channel.v1.UpdateCustomerRequest.getDefaultInstance()))
              .setResponseMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.cloud.channel.v1.Customer.getDefaultInstance()))
              .setSchemaDescriptor(new CloudChannelServiceMethodDescriptorSupplier("UpdateCustomer"))
              .build();
        }
      }
    }
    return getUpdateCustomerMethod;
  }

  private static volatile io.grpc.MethodDescriptor<com.google.cloud.channel.v1.DeleteCustomerRequest,
      com.google.protobuf.Empty> getDeleteCustomerMethod;

  @io.grpc.stub.annotations.RpcMethod(
      fullMethodName = SERVICE_NAME + '/' + "DeleteCustomer",
      requestType = com.google.cloud.channel.v1.DeleteCustomerRequest.class,
      responseType = com.google.protobuf.Empty.class,
      methodType = io.grpc.MethodDescriptor.MethodType.UNARY)
  public static io.grpc.MethodDescriptor<com.google.cloud.channel.v1.DeleteCustomerRequest,
      com.google.protobuf.Empty> getDeleteCustomerMethod() {
    io.grpc.MethodDescriptor<com.google.cloud.channel.v1.DeleteCustomerRequest, com.google.protobuf.Empty> getDeleteCustomerMethod;
    if ((getDeleteCustomerMethod = CloudChannelServiceGrpc.getDeleteCustomerMethod) == null) {
      synchronized (CloudChannelServiceGrpc.class) {
        if ((getDeleteCustomerMethod = CloudChannelServiceGrpc.getDeleteCustomerMethod) == null) {
          CloudChannelServiceGrpc.getDeleteCustomerMethod = getDeleteCustomerMethod =
              io.grpc.MethodDescriptor.<com.google.cloud.channel.v1.DeleteCustomerRequest, com.google.protobuf.Empty>newBuilder()
              .setType(io.grpc.MethodDescriptor.MethodType.UNARY)
              .setFullMethodName(generateFullMethodName(SERVICE_NAME, "DeleteCustomer"))
              .setSampledToLocalTracing(true)
              .setRequestMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.cloud.channel.v1.DeleteCustomerRequest.getDefaultInstance()))
              .setResponseMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.protobuf.Empty.getDefaultInstance()))
              .setSchemaDescriptor(new CloudChannelServiceMethodDescriptorSupplier("DeleteCustomer"))
              .build();
        }
      }
    }
    return getDeleteCustomerMethod;
  }

  private static volatile io.grpc.MethodDescriptor<com.google.cloud.channel.v1.ProvisionCloudIdentityRequest,
      com.google.longrunning.Operation> getProvisionCloudIdentityMethod;

  @io.grpc.stub.annotations.RpcMethod(
      fullMethodName = SERVICE_NAME + '/' + "ProvisionCloudIdentity",
      requestType = com.google.cloud.channel.v1.ProvisionCloudIdentityRequest.class,
      responseType = com.google.longrunning.Operation.class,
      methodType = io.grpc.MethodDescriptor.MethodType.UNARY)
  public static io.grpc.MethodDescriptor<com.google.cloud.channel.v1.ProvisionCloudIdentityRequest,
      com.google.longrunning.Operation> getProvisionCloudIdentityMethod() {
    io.grpc.MethodDescriptor<com.google.cloud.channel.v1.ProvisionCloudIdentityRequest, com.google.longrunning.Operation> getProvisionCloudIdentityMethod;
    if ((getProvisionCloudIdentityMethod = CloudChannelServiceGrpc.getProvisionCloudIdentityMethod) == null) {
      synchronized (CloudChannelServiceGrpc.class) {
        if ((getProvisionCloudIdentityMethod = CloudChannelServiceGrpc.getProvisionCloudIdentityMethod) == null) {
          CloudChannelServiceGrpc.getProvisionCloudIdentityMethod = getProvisionCloudIdentityMethod =
              io.grpc.MethodDescriptor.<com.google.cloud.channel.v1.ProvisionCloudIdentityRequest, com.google.longrunning.Operation>newBuilder()
              .setType(io.grpc.MethodDescriptor.MethodType.UNARY)
              .setFullMethodName(generateFullMethodName(SERVICE_NAME, "ProvisionCloudIdentity"))
              .setSampledToLocalTracing(true)
              .setRequestMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.cloud.channel.v1.ProvisionCloudIdentityRequest.getDefaultInstance()))
              .setResponseMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.longrunning.Operation.getDefaultInstance()))
              .setSchemaDescriptor(new CloudChannelServiceMethodDescriptorSupplier("ProvisionCloudIdentity"))
              .build();
        }
      }
    }
    return getProvisionCloudIdentityMethod;
  }

  private static volatile io.grpc.MethodDescriptor<com.google.cloud.channel.v1.ListEntitlementsRequest,
      com.google.cloud.channel.v1.ListEntitlementsResponse> getListEntitlementsMethod;

  @io.grpc.stub.annotations.RpcMethod(
      fullMethodName = SERVICE_NAME + '/' + "ListEntitlements",
      requestType = com.google.cloud.channel.v1.ListEntitlementsRequest.class,
      responseType = com.google.cloud.channel.v1.ListEntitlementsResponse.class,
      methodType = io.grpc.MethodDescriptor.MethodType.UNARY)
  public static io.grpc.MethodDescriptor<com.google.cloud.channel.v1.ListEntitlementsRequest,
      com.google.cloud.channel.v1.ListEntitlementsResponse> getListEntitlementsMethod() {
    io.grpc.MethodDescriptor<com.google.cloud.channel.v1.ListEntitlementsRequest, com.google.cloud.channel.v1.ListEntitlementsResponse> getListEntitlementsMethod;
    if ((getListEntitlementsMethod = CloudChannelServiceGrpc.getListEntitlementsMethod) == null) {
      synchronized (CloudChannelServiceGrpc.class) {
        if ((getListEntitlementsMethod = CloudChannelServiceGrpc.getListEntitlementsMethod) == null) {
          CloudChannelServiceGrpc.getListEntitlementsMethod = getListEntitlementsMethod =
              io.grpc.MethodDescriptor.<com.google.cloud.channel.v1.ListEntitlementsRequest, com.google.cloud.channel.v1.ListEntitlementsResponse>newBuilder()
              .setType(io.grpc.MethodDescriptor.MethodType.UNARY)
              .setFullMethodName(generateFullMethodName(SERVICE_NAME, "ListEntitlements"))
              .setSampledToLocalTracing(true)
              .setRequestMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.cloud.channel.v1.ListEntitlementsRequest.getDefaultInstance()))
              .setResponseMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.cloud.channel.v1.ListEntitlementsResponse.getDefaultInstance()))
              .setSchemaDescriptor(new CloudChannelServiceMethodDescriptorSupplier("ListEntitlements"))
              .build();
        }
      }
    }
    return getListEntitlementsMethod;
  }

  private static volatile io.grpc.MethodDescriptor<com.google.cloud.channel.v1.ListTransferableSkusRequest,
      com.google.cloud.channel.v1.ListTransferableSkusResponse> getListTransferableSkusMethod;

  @io.grpc.stub.annotations.RpcMethod(
      fullMethodName = SERVICE_NAME + '/' + "ListTransferableSkus",
      requestType = com.google.cloud.channel.v1.ListTransferableSkusRequest.class,
      responseType = com.google.cloud.channel.v1.ListTransferableSkusResponse.class,
      methodType = io.grpc.MethodDescriptor.MethodType.UNARY)
  public static io.grpc.MethodDescriptor<com.google.cloud.channel.v1.ListTransferableSkusRequest,
      com.google.cloud.channel.v1.ListTransferableSkusResponse> getListTransferableSkusMethod() {
    io.grpc.MethodDescriptor<com.google.cloud.channel.v1.ListTransferableSkusRequest, com.google.cloud.channel.v1.ListTransferableSkusResponse> getListTransferableSkusMethod;
    if ((getListTransferableSkusMethod = CloudChannelServiceGrpc.getListTransferableSkusMethod) == null) {
      synchronized (CloudChannelServiceGrpc.class) {
        if ((getListTransferableSkusMethod = CloudChannelServiceGrpc.getListTransferableSkusMethod) == null) {
          CloudChannelServiceGrpc.getListTransferableSkusMethod = getListTransferableSkusMethod =
              io.grpc.MethodDescriptor.<com.google.cloud.channel.v1.ListTransferableSkusRequest, com.google.cloud.channel.v1.ListTransferableSkusResponse>newBuilder()
              .setType(io.grpc.MethodDescriptor.MethodType.UNARY)
              .setFullMethodName(generateFullMethodName(SERVICE_NAME, "ListTransferableSkus"))
              .setSampledToLocalTracing(true)
              .setRequestMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.cloud.channel.v1.ListTransferableSkusRequest.getDefaultInstance()))
              .setResponseMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.cloud.channel.v1.ListTransferableSkusResponse.getDefaultInstance()))
              .setSchemaDescriptor(new CloudChannelServiceMethodDescriptorSupplier("ListTransferableSkus"))
              .build();
        }
      }
    }
    return getListTransferableSkusMethod;
  }

  private static volatile io.grpc.MethodDescriptor<com.google.cloud.channel.v1.ListTransferableOffersRequest,
      com.google.cloud.channel.v1.ListTransferableOffersResponse> getListTransferableOffersMethod;

  @io.grpc.stub.annotations.RpcMethod(
      fullMethodName = SERVICE_NAME + '/' + "ListTransferableOffers",
      requestType = com.google.cloud.channel.v1.ListTransferableOffersRequest.class,
      responseType = com.google.cloud.channel.v1.ListTransferableOffersResponse.class,
      methodType = io.grpc.MethodDescriptor.MethodType.UNARY)
  public static io.grpc.MethodDescriptor<com.google.cloud.channel.v1.ListTransferableOffersRequest,
      com.google.cloud.channel.v1.ListTransferableOffersResponse> getListTransferableOffersMethod() {
    io.grpc.MethodDescriptor<com.google.cloud.channel.v1.ListTransferableOffersRequest, com.google.cloud.channel.v1.ListTransferableOffersResponse> getListTransferableOffersMethod;
    if ((getListTransferableOffersMethod = CloudChannelServiceGrpc.getListTransferableOffersMethod) == null) {
      synchronized (CloudChannelServiceGrpc.class) {
        if ((getListTransferableOffersMethod = CloudChannelServiceGrpc.getListTransferableOffersMethod) == null) {
          CloudChannelServiceGrpc.getListTransferableOffersMethod = getListTransferableOffersMethod =
              io.grpc.MethodDescriptor.<com.google.cloud.channel.v1.ListTransferableOffersRequest, com.google.cloud.channel.v1.ListTransferableOffersResponse>newBuilder()
              .setType(io.grpc.MethodDescriptor.MethodType.UNARY)
              .setFullMethodName(generateFullMethodName(SERVICE_NAME, "ListTransferableOffers"))
              .setSampledToLocalTracing(true)
              .setRequestMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.cloud.channel.v1.ListTransferableOffersRequest.getDefaultInstance()))
              .setResponseMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.cloud.channel.v1.ListTransferableOffersResponse.getDefaultInstance()))
              .setSchemaDescriptor(new CloudChannelServiceMethodDescriptorSupplier("ListTransferableOffers"))
              .build();
        }
      }
    }
    return getListTransferableOffersMethod;
  }

  private static volatile io.grpc.MethodDescriptor<com.google.cloud.channel.v1.GetEntitlementRequest,
      com.google.cloud.channel.v1.Entitlement> getGetEntitlementMethod;

  @io.grpc.stub.annotations.RpcMethod(
      fullMethodName = SERVICE_NAME + '/' + "GetEntitlement",
      requestType = com.google.cloud.channel.v1.GetEntitlementRequest.class,
      responseType = com.google.cloud.channel.v1.Entitlement.class,
      methodType = io.grpc.MethodDescriptor.MethodType.UNARY)
  public static io.grpc.MethodDescriptor<com.google.cloud.channel.v1.GetEntitlementRequest,
      com.google.cloud.channel.v1.Entitlement> getGetEntitlementMethod() {
    io.grpc.MethodDescriptor<com.google.cloud.channel.v1.GetEntitlementRequest, com.google.cloud.channel.v1.Entitlement> getGetEntitlementMethod;
    if ((getGetEntitlementMethod = CloudChannelServiceGrpc.getGetEntitlementMethod) == null) {
      synchronized (CloudChannelServiceGrpc.class) {
        if ((getGetEntitlementMethod = CloudChannelServiceGrpc.getGetEntitlementMethod) == null) {
          CloudChannelServiceGrpc.getGetEntitlementMethod = getGetEntitlementMethod =
              io.grpc.MethodDescriptor.<com.google.cloud.channel.v1.GetEntitlementRequest, com.google.cloud.channel.v1.Entitlement>newBuilder()
              .setType(io.grpc.MethodDescriptor.MethodType.UNARY)
              .setFullMethodName(generateFullMethodName(SERVICE_NAME, "GetEntitlement"))
              .setSampledToLocalTracing(true)
              .setRequestMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.cloud.channel.v1.GetEntitlementRequest.getDefaultInstance()))
              .setResponseMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.cloud.channel.v1.Entitlement.getDefaultInstance()))
              .setSchemaDescriptor(new CloudChannelServiceMethodDescriptorSupplier("GetEntitlement"))
              .build();
        }
      }
    }
    return getGetEntitlementMethod;
  }

  private static volatile io.grpc.MethodDescriptor<com.google.cloud.channel.v1.CreateEntitlementRequest,
      com.google.longrunning.Operation> getCreateEntitlementMethod;

  @io.grpc.stub.annotations.RpcMethod(
      fullMethodName = SERVICE_NAME + '/' + "CreateEntitlement",
      requestType = com.google.cloud.channel.v1.CreateEntitlementRequest.class,
      responseType = com.google.longrunning.Operation.class,
      methodType = io.grpc.MethodDescriptor.MethodType.UNARY)
  public static io.grpc.MethodDescriptor<com.google.cloud.channel.v1.CreateEntitlementRequest,
      com.google.longrunning.Operation> getCreateEntitlementMethod() {
    io.grpc.MethodDescriptor<com.google.cloud.channel.v1.CreateEntitlementRequest, com.google.longrunning.Operation> getCreateEntitlementMethod;
    if ((getCreateEntitlementMethod = CloudChannelServiceGrpc.getCreateEntitlementMethod) == null) {
      synchronized (CloudChannelServiceGrpc.class) {
        if ((getCreateEntitlementMethod = CloudChannelServiceGrpc.getCreateEntitlementMethod) == null) {
          CloudChannelServiceGrpc.getCreateEntitlementMethod = getCreateEntitlementMethod =
              io.grpc.MethodDescriptor.<com.google.cloud.channel.v1.CreateEntitlementRequest, com.google.longrunning.Operation>newBuilder()
              .setType(io.grpc.MethodDescriptor.MethodType.UNARY)
              .setFullMethodName(generateFullMethodName(SERVICE_NAME, "CreateEntitlement"))
              .setSampledToLocalTracing(true)
              .setRequestMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.cloud.channel.v1.CreateEntitlementRequest.getDefaultInstance()))
              .setResponseMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.longrunning.Operation.getDefaultInstance()))
              .setSchemaDescriptor(new CloudChannelServiceMethodDescriptorSupplier("CreateEntitlement"))
              .build();
        }
      }
    }
    return getCreateEntitlementMethod;
  }

  private static volatile io.grpc.MethodDescriptor<com.google.cloud.channel.v1.ChangeParametersRequest,
      com.google.longrunning.Operation> getChangeParametersMethod;

  @io.grpc.stub.annotations.RpcMethod(
      fullMethodName = SERVICE_NAME + '/' + "ChangeParameters",
      requestType = com.google.cloud.channel.v1.ChangeParametersRequest.class,
      responseType = com.google.longrunning.Operation.class,
      methodType = io.grpc.MethodDescriptor.MethodType.UNARY)
  public static io.grpc.MethodDescriptor<com.google.cloud.channel.v1.ChangeParametersRequest,
      com.google.longrunning.Operation> getChangeParametersMethod() {
    io.grpc.MethodDescriptor<com.google.cloud.channel.v1.ChangeParametersRequest, com.google.longrunning.Operation> getChangeParametersMethod;
    if ((getChangeParametersMethod = CloudChannelServiceGrpc.getChangeParametersMethod) == null) {
      synchronized (CloudChannelServiceGrpc.class) {
        if ((getChangeParametersMethod = CloudChannelServiceGrpc.getChangeParametersMethod) == null) {
          CloudChannelServiceGrpc.getChangeParametersMethod = getChangeParametersMethod =
              io.grpc.MethodDescriptor.<com.google.cloud.channel.v1.ChangeParametersRequest, com.google.longrunning.Operation>newBuilder()
              .setType(io.grpc.MethodDescriptor.MethodType.UNARY)
              .setFullMethodName(generateFullMethodName(SERVICE_NAME, "ChangeParameters"))
              .setSampledToLocalTracing(true)
              .setRequestMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.cloud.channel.v1.ChangeParametersRequest.getDefaultInstance()))
              .setResponseMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.longrunning.Operation.getDefaultInstance()))
              .setSchemaDescriptor(new CloudChannelServiceMethodDescriptorSupplier("ChangeParameters"))
              .build();
        }
      }
    }
    return getChangeParametersMethod;
  }

  private static volatile io.grpc.MethodDescriptor<com.google.cloud.channel.v1.ChangeRenewalSettingsRequest,
      com.google.longrunning.Operation> getChangeRenewalSettingsMethod;

  @io.grpc.stub.annotations.RpcMethod(
      fullMethodName = SERVICE_NAME + '/' + "ChangeRenewalSettings",
      requestType = com.google.cloud.channel.v1.ChangeRenewalSettingsRequest.class,
      responseType = com.google.longrunning.Operation.class,
      methodType = io.grpc.MethodDescriptor.MethodType.UNARY)
  public static io.grpc.MethodDescriptor<com.google.cloud.channel.v1.ChangeRenewalSettingsRequest,
      com.google.longrunning.Operation> getChangeRenewalSettingsMethod() {
    io.grpc.MethodDescriptor<com.google.cloud.channel.v1.ChangeRenewalSettingsRequest, com.google.longrunning.Operation> getChangeRenewalSettingsMethod;
    if ((getChangeRenewalSettingsMethod = CloudChannelServiceGrpc.getChangeRenewalSettingsMethod) == null) {
      synchronized (CloudChannelServiceGrpc.class) {
        if ((getChangeRenewalSettingsMethod = CloudChannelServiceGrpc.getChangeRenewalSettingsMethod) == null) {
          CloudChannelServiceGrpc.getChangeRenewalSettingsMethod = getChangeRenewalSettingsMethod =
              io.grpc.MethodDescriptor.<com.google.cloud.channel.v1.ChangeRenewalSettingsRequest, com.google.longrunning.Operation>newBuilder()
              .setType(io.grpc.MethodDescriptor.MethodType.UNARY)
              .setFullMethodName(generateFullMethodName(SERVICE_NAME, "ChangeRenewalSettings"))
              .setSampledToLocalTracing(true)
              .setRequestMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.cloud.channel.v1.ChangeRenewalSettingsRequest.getDefaultInstance()))
              .setResponseMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.longrunning.Operation.getDefaultInstance()))
              .setSchemaDescriptor(new CloudChannelServiceMethodDescriptorSupplier("ChangeRenewalSettings"))
              .build();
        }
      }
    }
    return getChangeRenewalSettingsMethod;
  }

  private static volatile io.grpc.MethodDescriptor<com.google.cloud.channel.v1.ChangeOfferRequest,
      com.google.longrunning.Operation> getChangeOfferMethod;

  @io.grpc.stub.annotations.RpcMethod(
      fullMethodName = SERVICE_NAME + '/' + "ChangeOffer",
      requestType = com.google.cloud.channel.v1.ChangeOfferRequest.class,
      responseType = com.google.longrunning.Operation.class,
      methodType = io.grpc.MethodDescriptor.MethodType.UNARY)
  public static io.grpc.MethodDescriptor<com.google.cloud.channel.v1.ChangeOfferRequest,
      com.google.longrunning.Operation> getChangeOfferMethod() {
    io.grpc.MethodDescriptor<com.google.cloud.channel.v1.ChangeOfferRequest, com.google.longrunning.Operation> getChangeOfferMethod;
    if ((getChangeOfferMethod = CloudChannelServiceGrpc.getChangeOfferMethod) == null) {
      synchronized (CloudChannelServiceGrpc.class) {
        if ((getChangeOfferMethod = CloudChannelServiceGrpc.getChangeOfferMethod) == null) {
          CloudChannelServiceGrpc.getChangeOfferMethod = getChangeOfferMethod =
              io.grpc.MethodDescriptor.<com.google.cloud.channel.v1.ChangeOfferRequest, com.google.longrunning.Operation>newBuilder()
              .setType(io.grpc.MethodDescriptor.MethodType.UNARY)
              .setFullMethodName(generateFullMethodName(SERVICE_NAME, "ChangeOffer"))
              .setSampledToLocalTracing(true)
              .setRequestMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.cloud.channel.v1.ChangeOfferRequest.getDefaultInstance()))
              .setResponseMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.longrunning.Operation.getDefaultInstance()))
              .setSchemaDescriptor(new CloudChannelServiceMethodDescriptorSupplier("ChangeOffer"))
              .build();
        }
      }
    }
    return getChangeOfferMethod;
  }

  private static volatile io.grpc.MethodDescriptor<com.google.cloud.channel.v1.StartPaidServiceRequest,
      com.google.longrunning.Operation> getStartPaidServiceMethod;

  @io.grpc.stub.annotations.RpcMethod(
      fullMethodName = SERVICE_NAME + '/' + "StartPaidService",
      requestType = com.google.cloud.channel.v1.StartPaidServiceRequest.class,
      responseType = com.google.longrunning.Operation.class,
      methodType = io.grpc.MethodDescriptor.MethodType.UNARY)
  public static io.grpc.MethodDescriptor<com.google.cloud.channel.v1.StartPaidServiceRequest,
      com.google.longrunning.Operation> getStartPaidServiceMethod() {
    io.grpc.MethodDescriptor<com.google.cloud.channel.v1.StartPaidServiceRequest, com.google.longrunning.Operation> getStartPaidServiceMethod;
    if ((getStartPaidServiceMethod = CloudChannelServiceGrpc.getStartPaidServiceMethod) == null) {
      synchronized (CloudChannelServiceGrpc.class) {
        if ((getStartPaidServiceMethod = CloudChannelServiceGrpc.getStartPaidServiceMethod) == null) {
          CloudChannelServiceGrpc.getStartPaidServiceMethod = getStartPaidServiceMethod =
              io.grpc.MethodDescriptor.<com.google.cloud.channel.v1.StartPaidServiceRequest, com.google.longrunning.Operation>newBuilder()
              .setType(io.grpc.MethodDescriptor.MethodType.UNARY)
              .setFullMethodName(generateFullMethodName(SERVICE_NAME, "StartPaidService"))
              .setSampledToLocalTracing(true)
              .setRequestMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.cloud.channel.v1.StartPaidServiceRequest.getDefaultInstance()))
              .setResponseMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.longrunning.Operation.getDefaultInstance()))
              .setSchemaDescriptor(new CloudChannelServiceMethodDescriptorSupplier("StartPaidService"))
              .build();
        }
      }
    }
    return getStartPaidServiceMethod;
  }

  private static volatile io.grpc.MethodDescriptor<com.google.cloud.channel.v1.SuspendEntitlementRequest,
      com.google.longrunning.Operation> getSuspendEntitlementMethod;

  @io.grpc.stub.annotations.RpcMethod(
      fullMethodName = SERVICE_NAME + '/' + "SuspendEntitlement",
      requestType = com.google.cloud.channel.v1.SuspendEntitlementRequest.class,
      responseType = com.google.longrunning.Operation.class,
      methodType = io.grpc.MethodDescriptor.MethodType.UNARY)
  public static io.grpc.MethodDescriptor<com.google.cloud.channel.v1.SuspendEntitlementRequest,
      com.google.longrunning.Operation> getSuspendEntitlementMethod() {
    io.grpc.MethodDescriptor<com.google.cloud.channel.v1.SuspendEntitlementRequest, com.google.longrunning.Operation> getSuspendEntitlementMethod;
    if ((getSuspendEntitlementMethod = CloudChannelServiceGrpc.getSuspendEntitlementMethod) == null) {
      synchronized (CloudChannelServiceGrpc.class) {
        if ((getSuspendEntitlementMethod = CloudChannelServiceGrpc.getSuspendEntitlementMethod) == null) {
          CloudChannelServiceGrpc.getSuspendEntitlementMethod = getSuspendEntitlementMethod =
              io.grpc.MethodDescriptor.<com.google.cloud.channel.v1.SuspendEntitlementRequest, com.google.longrunning.Operation>newBuilder()
              .setType(io.grpc.MethodDescriptor.MethodType.UNARY)
              .setFullMethodName(generateFullMethodName(SERVICE_NAME, "SuspendEntitlement"))
              .setSampledToLocalTracing(true)
              .setRequestMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.cloud.channel.v1.SuspendEntitlementRequest.getDefaultInstance()))
              .setResponseMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.longrunning.Operation.getDefaultInstance()))
              .setSchemaDescriptor(new CloudChannelServiceMethodDescriptorSupplier("SuspendEntitlement"))
              .build();
        }
      }
    }
    return getSuspendEntitlementMethod;
  }

  private static volatile io.grpc.MethodDescriptor<com.google.cloud.channel.v1.CancelEntitlementRequest,
      com.google.longrunning.Operation> getCancelEntitlementMethod;

  @io.grpc.stub.annotations.RpcMethod(
      fullMethodName = SERVICE_NAME + '/' + "CancelEntitlement",
      requestType = com.google.cloud.channel.v1.CancelEntitlementRequest.class,
      responseType = com.google.longrunning.Operation.class,
      methodType = io.grpc.MethodDescriptor.MethodType.UNARY)
  public static io.grpc.MethodDescriptor<com.google.cloud.channel.v1.CancelEntitlementRequest,
      com.google.longrunning.Operation> getCancelEntitlementMethod() {
    io.grpc.MethodDescriptor<com.google.cloud.channel.v1.CancelEntitlementRequest, com.google.longrunning.Operation> getCancelEntitlementMethod;
    if ((getCancelEntitlementMethod = CloudChannelServiceGrpc.getCancelEntitlementMethod) == null) {
      synchronized (CloudChannelServiceGrpc.class) {
        if ((getCancelEntitlementMethod = CloudChannelServiceGrpc.getCancelEntitlementMethod) == null) {
          CloudChannelServiceGrpc.getCancelEntitlementMethod = getCancelEntitlementMethod =
              io.grpc.MethodDescriptor.<com.google.cloud.channel.v1.CancelEntitlementRequest, com.google.longrunning.Operation>newBuilder()
              .setType(io.grpc.MethodDescriptor.MethodType.UNARY)
              .setFullMethodName(generateFullMethodName(SERVICE_NAME, "CancelEntitlement"))
              .setSampledToLocalTracing(true)
              .setRequestMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.cloud.channel.v1.CancelEntitlementRequest.getDefaultInstance()))
              .setResponseMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.longrunning.Operation.getDefaultInstance()))
              .setSchemaDescriptor(new CloudChannelServiceMethodDescriptorSupplier("CancelEntitlement"))
              .build();
        }
      }
    }
    return getCancelEntitlementMethod;
  }

  private static volatile io.grpc.MethodDescriptor<com.google.cloud.channel.v1.ActivateEntitlementRequest,
      com.google.longrunning.Operation> getActivateEntitlementMethod;

  @io.grpc.stub.annotations.RpcMethod(
      fullMethodName = SERVICE_NAME + '/' + "ActivateEntitlement",
      requestType = com.google.cloud.channel.v1.ActivateEntitlementRequest.class,
      responseType = com.google.longrunning.Operation.class,
      methodType = io.grpc.MethodDescriptor.MethodType.UNARY)
  public static io.grpc.MethodDescriptor<com.google.cloud.channel.v1.ActivateEntitlementRequest,
      com.google.longrunning.Operation> getActivateEntitlementMethod() {
    io.grpc.MethodDescriptor<com.google.cloud.channel.v1.ActivateEntitlementRequest, com.google.longrunning.Operation> getActivateEntitlementMethod;
    if ((getActivateEntitlementMethod = CloudChannelServiceGrpc.getActivateEntitlementMethod) == null) {
      synchronized (CloudChannelServiceGrpc.class) {
        if ((getActivateEntitlementMethod = CloudChannelServiceGrpc.getActivateEntitlementMethod) == null) {
          CloudChannelServiceGrpc.getActivateEntitlementMethod = getActivateEntitlementMethod =
              io.grpc.MethodDescriptor.<com.google.cloud.channel.v1.ActivateEntitlementRequest, com.google.longrunning.Operation>newBuilder()
              .setType(io.grpc.MethodDescriptor.MethodType.UNARY)
              .setFullMethodName(generateFullMethodName(SERVICE_NAME, "ActivateEntitlement"))
              .setSampledToLocalTracing(true)
              .setRequestMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.cloud.channel.v1.ActivateEntitlementRequest.getDefaultInstance()))
              .setResponseMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.longrunning.Operation.getDefaultInstance()))
              .setSchemaDescriptor(new CloudChannelServiceMethodDescriptorSupplier("ActivateEntitlement"))
              .build();
        }
      }
    }
    return getActivateEntitlementMethod;
  }

  private static volatile io.grpc.MethodDescriptor<com.google.cloud.channel.v1.TransferEntitlementsRequest,
      com.google.longrunning.Operation> getTransferEntitlementsMethod;

  @io.grpc.stub.annotations.RpcMethod(
      fullMethodName = SERVICE_NAME + '/' + "TransferEntitlements",
      requestType = com.google.cloud.channel.v1.TransferEntitlementsRequest.class,
      responseType = com.google.longrunning.Operation.class,
      methodType = io.grpc.MethodDescriptor.MethodType.UNARY)
  public static io.grpc.MethodDescriptor<com.google.cloud.channel.v1.TransferEntitlementsRequest,
      com.google.longrunning.Operation> getTransferEntitlementsMethod() {
    io.grpc.MethodDescriptor<com.google.cloud.channel.v1.TransferEntitlementsRequest, com.google.longrunning.Operation> getTransferEntitlementsMethod;
    if ((getTransferEntitlementsMethod = CloudChannelServiceGrpc.getTransferEntitlementsMethod) == null) {
      synchronized (CloudChannelServiceGrpc.class) {
        if ((getTransferEntitlementsMethod = CloudChannelServiceGrpc.getTransferEntitlementsMethod) == null) {
          CloudChannelServiceGrpc.getTransferEntitlementsMethod = getTransferEntitlementsMethod =
              io.grpc.MethodDescriptor.<com.google.cloud.channel.v1.TransferEntitlementsRequest, com.google.longrunning.Operation>newBuilder()
              .setType(io.grpc.MethodDescriptor.MethodType.UNARY)
              .setFullMethodName(generateFullMethodName(SERVICE_NAME, "TransferEntitlements"))
              .setSampledToLocalTracing(true)
              .setRequestMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.cloud.channel.v1.TransferEntitlementsRequest.getDefaultInstance()))
              .setResponseMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.longrunning.Operation.getDefaultInstance()))
              .setSchemaDescriptor(new CloudChannelServiceMethodDescriptorSupplier("TransferEntitlements"))
              .build();
        }
      }
    }
    return getTransferEntitlementsMethod;
  }

  private static volatile io.grpc.MethodDescriptor<com.google.cloud.channel.v1.TransferEntitlementsToGoogleRequest,
      com.google.longrunning.Operation> getTransferEntitlementsToGoogleMethod;

  @io.grpc.stub.annotations.RpcMethod(
      fullMethodName = SERVICE_NAME + '/' + "TransferEntitlementsToGoogle",
      requestType = com.google.cloud.channel.v1.TransferEntitlementsToGoogleRequest.class,
      responseType = com.google.longrunning.Operation.class,
      methodType = io.grpc.MethodDescriptor.MethodType.UNARY)
  public static io.grpc.MethodDescriptor<com.google.cloud.channel.v1.TransferEntitlementsToGoogleRequest,
      com.google.longrunning.Operation> getTransferEntitlementsToGoogleMethod() {
    io.grpc.MethodDescriptor<com.google.cloud.channel.v1.TransferEntitlementsToGoogleRequest, com.google.longrunning.Operation> getTransferEntitlementsToGoogleMethod;
    if ((getTransferEntitlementsToGoogleMethod = CloudChannelServiceGrpc.getTransferEntitlementsToGoogleMethod) == null) {
      synchronized (CloudChannelServiceGrpc.class) {
        if ((getTransferEntitlementsToGoogleMethod = CloudChannelServiceGrpc.getTransferEntitlementsToGoogleMethod) == null) {
          CloudChannelServiceGrpc.getTransferEntitlementsToGoogleMethod = getTransferEntitlementsToGoogleMethod =
              io.grpc.MethodDescriptor.<com.google.cloud.channel.v1.TransferEntitlementsToGoogleRequest, com.google.longrunning.Operation>newBuilder()
              .setType(io.grpc.MethodDescriptor.MethodType.UNARY)
              .setFullMethodName(generateFullMethodName(SERVICE_NAME, "TransferEntitlementsToGoogle"))
              .setSampledToLocalTracing(true)
              .setRequestMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.cloud.channel.v1.TransferEntitlementsToGoogleRequest.getDefaultInstance()))
              .setResponseMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.longrunning.Operation.getDefaultInstance()))
              .setSchemaDescriptor(new CloudChannelServiceMethodDescriptorSupplier("TransferEntitlementsToGoogle"))
              .build();
        }
      }
    }
    return getTransferEntitlementsToGoogleMethod;
  }

  private static volatile io.grpc.MethodDescriptor<com.google.cloud.channel.v1.ListChannelPartnerLinksRequest,
      com.google.cloud.channel.v1.ListChannelPartnerLinksResponse> getListChannelPartnerLinksMethod;

  @io.grpc.stub.annotations.RpcMethod(
      fullMethodName = SERVICE_NAME + '/' + "ListChannelPartnerLinks",
      requestType = com.google.cloud.channel.v1.ListChannelPartnerLinksRequest.class,
      responseType = com.google.cloud.channel.v1.ListChannelPartnerLinksResponse.class,
      methodType = io.grpc.MethodDescriptor.MethodType.UNARY)
  public static io.grpc.MethodDescriptor<com.google.cloud.channel.v1.ListChannelPartnerLinksRequest,
      com.google.cloud.channel.v1.ListChannelPartnerLinksResponse> getListChannelPartnerLinksMethod() {
    io.grpc.MethodDescriptor<com.google.cloud.channel.v1.ListChannelPartnerLinksRequest, com.google.cloud.channel.v1.ListChannelPartnerLinksResponse> getListChannelPartnerLinksMethod;
    if ((getListChannelPartnerLinksMethod = CloudChannelServiceGrpc.getListChannelPartnerLinksMethod) == null) {
      synchronized (CloudChannelServiceGrpc.class) {
        if ((getListChannelPartnerLinksMethod = CloudChannelServiceGrpc.getListChannelPartnerLinksMethod) == null) {
          CloudChannelServiceGrpc.getListChannelPartnerLinksMethod = getListChannelPartnerLinksMethod =
              io.grpc.MethodDescriptor.<com.google.cloud.channel.v1.ListChannelPartnerLinksRequest, com.google.cloud.channel.v1.ListChannelPartnerLinksResponse>newBuilder()
              .setType(io.grpc.MethodDescriptor.MethodType.UNARY)
              .setFullMethodName(generateFullMethodName(SERVICE_NAME, "ListChannelPartnerLinks"))
              .setSampledToLocalTracing(true)
              .setRequestMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.cloud.channel.v1.ListChannelPartnerLinksRequest.getDefaultInstance()))
              .setResponseMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.cloud.channel.v1.ListChannelPartnerLinksResponse.getDefaultInstance()))
              .setSchemaDescriptor(new CloudChannelServiceMethodDescriptorSupplier("ListChannelPartnerLinks"))
              .build();
        }
      }
    }
    return getListChannelPartnerLinksMethod;
  }

  private static volatile io.grpc.MethodDescriptor<com.google.cloud.channel.v1.GetChannelPartnerLinkRequest,
      com.google.cloud.channel.v1.ChannelPartnerLink> getGetChannelPartnerLinkMethod;

  @io.grpc.stub.annotations.RpcMethod(
      fullMethodName = SERVICE_NAME + '/' + "GetChannelPartnerLink",
      requestType = com.google.cloud.channel.v1.GetChannelPartnerLinkRequest.class,
      responseType = com.google.cloud.channel.v1.ChannelPartnerLink.class,
      methodType = io.grpc.MethodDescriptor.MethodType.UNARY)
  public static io.grpc.MethodDescriptor<com.google.cloud.channel.v1.GetChannelPartnerLinkRequest,
      com.google.cloud.channel.v1.ChannelPartnerLink> getGetChannelPartnerLinkMethod() {
    io.grpc.MethodDescriptor<com.google.cloud.channel.v1.GetChannelPartnerLinkRequest, com.google.cloud.channel.v1.ChannelPartnerLink> getGetChannelPartnerLinkMethod;
    if ((getGetChannelPartnerLinkMethod = CloudChannelServiceGrpc.getGetChannelPartnerLinkMethod) == null) {
      synchronized (CloudChannelServiceGrpc.class) {
        if ((getGetChannelPartnerLinkMethod = CloudChannelServiceGrpc.getGetChannelPartnerLinkMethod) == null) {
          CloudChannelServiceGrpc.getGetChannelPartnerLinkMethod = getGetChannelPartnerLinkMethod =
              io.grpc.MethodDescriptor.<com.google.cloud.channel.v1.GetChannelPartnerLinkRequest, com.google.cloud.channel.v1.ChannelPartnerLink>newBuilder()
              .setType(io.grpc.MethodDescriptor.MethodType.UNARY)
              .setFullMethodName(generateFullMethodName(SERVICE_NAME, "GetChannelPartnerLink"))
              .setSampledToLocalTracing(true)
              .setRequestMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.cloud.channel.v1.GetChannelPartnerLinkRequest.getDefaultInstance()))
              .setResponseMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.cloud.channel.v1.ChannelPartnerLink.getDefaultInstance()))
              .setSchemaDescriptor(new CloudChannelServiceMethodDescriptorSupplier("GetChannelPartnerLink"))
              .build();
        }
      }
    }
    return getGetChannelPartnerLinkMethod;
  }

  private static volatile io.grpc.MethodDescriptor<com.google.cloud.channel.v1.CreateChannelPartnerLinkRequest,
      com.google.cloud.channel.v1.ChannelPartnerLink> getCreateChannelPartnerLinkMethod;

  @io.grpc.stub.annotations.RpcMethod(
      fullMethodName = SERVICE_NAME + '/' + "CreateChannelPartnerLink",
      requestType = com.google.cloud.channel.v1.CreateChannelPartnerLinkRequest.class,
      responseType = com.google.cloud.channel.v1.ChannelPartnerLink.class,
      methodType = io.grpc.MethodDescriptor.MethodType.UNARY)
  public static io.grpc.MethodDescriptor<com.google.cloud.channel.v1.CreateChannelPartnerLinkRequest,
      com.google.cloud.channel.v1.ChannelPartnerLink> getCreateChannelPartnerLinkMethod() {
    io.grpc.MethodDescriptor<com.google.cloud.channel.v1.CreateChannelPartnerLinkRequest, com.google.cloud.channel.v1.ChannelPartnerLink> getCreateChannelPartnerLinkMethod;
    if ((getCreateChannelPartnerLinkMethod = CloudChannelServiceGrpc.getCreateChannelPartnerLinkMethod) == null) {
      synchronized (CloudChannelServiceGrpc.class) {
        if ((getCreateChannelPartnerLinkMethod = CloudChannelServiceGrpc.getCreateChannelPartnerLinkMethod) == null) {
          CloudChannelServiceGrpc.getCreateChannelPartnerLinkMethod = getCreateChannelPartnerLinkMethod =
              io.grpc.MethodDescriptor.<com.google.cloud.channel.v1.CreateChannelPartnerLinkRequest, com.google.cloud.channel.v1.ChannelPartnerLink>newBuilder()
              .setType(io.grpc.MethodDescriptor.MethodType.UNARY)
              .setFullMethodName(generateFullMethodName(SERVICE_NAME, "CreateChannelPartnerLink"))
              .setSampledToLocalTracing(true)
              .setRequestMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.cloud.channel.v1.CreateChannelPartnerLinkRequest.getDefaultInstance()))
              .setResponseMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.cloud.channel.v1.ChannelPartnerLink.getDefaultInstance()))
              .setSchemaDescriptor(new CloudChannelServiceMethodDescriptorSupplier("CreateChannelPartnerLink"))
              .build();
        }
      }
    }
    return getCreateChannelPartnerLinkMethod;
  }

  private static volatile io.grpc.MethodDescriptor<com.google.cloud.channel.v1.UpdateChannelPartnerLinkRequest,
      com.google.cloud.channel.v1.ChannelPartnerLink> getUpdateChannelPartnerLinkMethod;

  @io.grpc.stub.annotations.RpcMethod(
      fullMethodName = SERVICE_NAME + '/' + "UpdateChannelPartnerLink",
      requestType = com.google.cloud.channel.v1.UpdateChannelPartnerLinkRequest.class,
      responseType = com.google.cloud.channel.v1.ChannelPartnerLink.class,
      methodType = io.grpc.MethodDescriptor.MethodType.UNARY)
  public static io.grpc.MethodDescriptor<com.google.cloud.channel.v1.UpdateChannelPartnerLinkRequest,
      com.google.cloud.channel.v1.ChannelPartnerLink> getUpdateChannelPartnerLinkMethod() {
    io.grpc.MethodDescriptor<com.google.cloud.channel.v1.UpdateChannelPartnerLinkRequest, com.google.cloud.channel.v1.ChannelPartnerLink> getUpdateChannelPartnerLinkMethod;
    if ((getUpdateChannelPartnerLinkMethod = CloudChannelServiceGrpc.getUpdateChannelPartnerLinkMethod) == null) {
      synchronized (CloudChannelServiceGrpc.class) {
        if ((getUpdateChannelPartnerLinkMethod = CloudChannelServiceGrpc.getUpdateChannelPartnerLinkMethod) == null) {
          CloudChannelServiceGrpc.getUpdateChannelPartnerLinkMethod = getUpdateChannelPartnerLinkMethod =
              io.grpc.MethodDescriptor.<com.google.cloud.channel.v1.UpdateChannelPartnerLinkRequest, com.google.cloud.channel.v1.ChannelPartnerLink>newBuilder()
              .setType(io.grpc.MethodDescriptor.MethodType.UNARY)
              .setFullMethodName(generateFullMethodName(SERVICE_NAME, "UpdateChannelPartnerLink"))
              .setSampledToLocalTracing(true)
              .setRequestMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.cloud.channel.v1.UpdateChannelPartnerLinkRequest.getDefaultInstance()))
              .setResponseMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.cloud.channel.v1.ChannelPartnerLink.getDefaultInstance()))
              .setSchemaDescriptor(new CloudChannelServiceMethodDescriptorSupplier("UpdateChannelPartnerLink"))
              .build();
        }
      }
    }
    return getUpdateChannelPartnerLinkMethod;
  }

  private static volatile io.grpc.MethodDescriptor<com.google.cloud.channel.v1.LookupOfferRequest,
      com.google.cloud.channel.v1.Offer> getLookupOfferMethod;

  @io.grpc.stub.annotations.RpcMethod(
      fullMethodName = SERVICE_NAME + '/' + "LookupOffer",
      requestType = com.google.cloud.channel.v1.LookupOfferRequest.class,
      responseType = com.google.cloud.channel.v1.Offer.class,
      methodType = io.grpc.MethodDescriptor.MethodType.UNARY)
  public static io.grpc.MethodDescriptor<com.google.cloud.channel.v1.LookupOfferRequest,
      com.google.cloud.channel.v1.Offer> getLookupOfferMethod() {
    io.grpc.MethodDescriptor<com.google.cloud.channel.v1.LookupOfferRequest, com.google.cloud.channel.v1.Offer> getLookupOfferMethod;
    if ((getLookupOfferMethod = CloudChannelServiceGrpc.getLookupOfferMethod) == null) {
      synchronized (CloudChannelServiceGrpc.class) {
        if ((getLookupOfferMethod = CloudChannelServiceGrpc.getLookupOfferMethod) == null) {
          CloudChannelServiceGrpc.getLookupOfferMethod = getLookupOfferMethod =
              io.grpc.MethodDescriptor.<com.google.cloud.channel.v1.LookupOfferRequest, com.google.cloud.channel.v1.Offer>newBuilder()
              .setType(io.grpc.MethodDescriptor.MethodType.UNARY)
              .setFullMethodName(generateFullMethodName(SERVICE_NAME, "LookupOffer"))
              .setSampledToLocalTracing(true)
              .setRequestMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.cloud.channel.v1.LookupOfferRequest.getDefaultInstance()))
              .setResponseMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.cloud.channel.v1.Offer.getDefaultInstance()))
              .setSchemaDescriptor(new CloudChannelServiceMethodDescriptorSupplier("LookupOffer"))
              .build();
        }
      }
    }
    return getLookupOfferMethod;
  }

  private static volatile io.grpc.MethodDescriptor<com.google.cloud.channel.v1.ListProductsRequest,
      com.google.cloud.channel.v1.ListProductsResponse> getListProductsMethod;

  @io.grpc.stub.annotations.RpcMethod(
      fullMethodName = SERVICE_NAME + '/' + "ListProducts",
      requestType = com.google.cloud.channel.v1.ListProductsRequest.class,
      responseType = com.google.cloud.channel.v1.ListProductsResponse.class,
      methodType = io.grpc.MethodDescriptor.MethodType.UNARY)
  public static io.grpc.MethodDescriptor<com.google.cloud.channel.v1.ListProductsRequest,
      com.google.cloud.channel.v1.ListProductsResponse> getListProductsMethod() {
    io.grpc.MethodDescriptor<com.google.cloud.channel.v1.ListProductsRequest, com.google.cloud.channel.v1.ListProductsResponse> getListProductsMethod;
    if ((getListProductsMethod = CloudChannelServiceGrpc.getListProductsMethod) == null) {
      synchronized (CloudChannelServiceGrpc.class) {
        if ((getListProductsMethod = CloudChannelServiceGrpc.getListProductsMethod) == null) {
          CloudChannelServiceGrpc.getListProductsMethod = getListProductsMethod =
              io.grpc.MethodDescriptor.<com.google.cloud.channel.v1.ListProductsRequest, com.google.cloud.channel.v1.ListProductsResponse>newBuilder()
              .setType(io.grpc.MethodDescriptor.MethodType.UNARY)
              .setFullMethodName(generateFullMethodName(SERVICE_NAME, "ListProducts"))
              .setSampledToLocalTracing(true)
              .setRequestMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.cloud.channel.v1.ListProductsRequest.getDefaultInstance()))
              .setResponseMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.cloud.channel.v1.ListProductsResponse.getDefaultInstance()))
              .setSchemaDescriptor(new CloudChannelServiceMethodDescriptorSupplier("ListProducts"))
              .build();
        }
      }
    }
    return getListProductsMethod;
  }

  private static volatile io.grpc.MethodDescriptor<com.google.cloud.channel.v1.ListSkusRequest,
      com.google.cloud.channel.v1.ListSkusResponse> getListSkusMethod;

  @io.grpc.stub.annotations.RpcMethod(
      fullMethodName = SERVICE_NAME + '/' + "ListSkus",
      requestType = com.google.cloud.channel.v1.ListSkusRequest.class,
      responseType = com.google.cloud.channel.v1.ListSkusResponse.class,
      methodType = io.grpc.MethodDescriptor.MethodType.UNARY)
  public static io.grpc.MethodDescriptor<com.google.cloud.channel.v1.ListSkusRequest,
      com.google.cloud.channel.v1.ListSkusResponse> getListSkusMethod() {
    io.grpc.MethodDescriptor<com.google.cloud.channel.v1.ListSkusRequest, com.google.cloud.channel.v1.ListSkusResponse> getListSkusMethod;
    if ((getListSkusMethod = CloudChannelServiceGrpc.getListSkusMethod) == null) {
      synchronized (CloudChannelServiceGrpc.class) {
        if ((getListSkusMethod = CloudChannelServiceGrpc.getListSkusMethod) == null) {
          CloudChannelServiceGrpc.getListSkusMethod = getListSkusMethod =
              io.grpc.MethodDescriptor.<com.google.cloud.channel.v1.ListSkusRequest, com.google.cloud.channel.v1.ListSkusResponse>newBuilder()
              .setType(io.grpc.MethodDescriptor.MethodType.UNARY)
              .setFullMethodName(generateFullMethodName(SERVICE_NAME, "ListSkus"))
              .setSampledToLocalTracing(true)
              .setRequestMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.cloud.channel.v1.ListSkusRequest.getDefaultInstance()))
              .setResponseMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.cloud.channel.v1.ListSkusResponse.getDefaultInstance()))
              .setSchemaDescriptor(new CloudChannelServiceMethodDescriptorSupplier("ListSkus"))
              .build();
        }
      }
    }
    return getListSkusMethod;
  }

  private static volatile io.grpc.MethodDescriptor<com.google.cloud.channel.v1.ListOffersRequest,
      com.google.cloud.channel.v1.ListOffersResponse> getListOffersMethod;

  @io.grpc.stub.annotations.RpcMethod(
      fullMethodName = SERVICE_NAME + '/' + "ListOffers",
      requestType = com.google.cloud.channel.v1.ListOffersRequest.class,
      responseType = com.google.cloud.channel.v1.ListOffersResponse.class,
      methodType = io.grpc.MethodDescriptor.MethodType.UNARY)
  public static io.grpc.MethodDescriptor<com.google.cloud.channel.v1.ListOffersRequest,
      com.google.cloud.channel.v1.ListOffersResponse> getListOffersMethod() {
    io.grpc.MethodDescriptor<com.google.cloud.channel.v1.ListOffersRequest, com.google.cloud.channel.v1.ListOffersResponse> getListOffersMethod;
    if ((getListOffersMethod = CloudChannelServiceGrpc.getListOffersMethod) == null) {
      synchronized (CloudChannelServiceGrpc.class) {
        if ((getListOffersMethod = CloudChannelServiceGrpc.getListOffersMethod) == null) {
          CloudChannelServiceGrpc.getListOffersMethod = getListOffersMethod =
              io.grpc.MethodDescriptor.<com.google.cloud.channel.v1.ListOffersRequest, com.google.cloud.channel.v1.ListOffersResponse>newBuilder()
              .setType(io.grpc.MethodDescriptor.MethodType.UNARY)
              .setFullMethodName(generateFullMethodName(SERVICE_NAME, "ListOffers"))
              .setSampledToLocalTracing(true)
              .setRequestMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.cloud.channel.v1.ListOffersRequest.getDefaultInstance()))
              .setResponseMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.cloud.channel.v1.ListOffersResponse.getDefaultInstance()))
              .setSchemaDescriptor(new CloudChannelServiceMethodDescriptorSupplier("ListOffers"))
              .build();
        }
      }
    }
    return getListOffersMethod;
  }

  private static volatile io.grpc.MethodDescriptor<com.google.cloud.channel.v1.ListPurchasableSkusRequest,
      com.google.cloud.channel.v1.ListPurchasableSkusResponse> getListPurchasableSkusMethod;

  @io.grpc.stub.annotations.RpcMethod(
      fullMethodName = SERVICE_NAME + '/' + "ListPurchasableSkus",
      requestType = com.google.cloud.channel.v1.ListPurchasableSkusRequest.class,
      responseType = com.google.cloud.channel.v1.ListPurchasableSkusResponse.class,
      methodType = io.grpc.MethodDescriptor.MethodType.UNARY)
  public static io.grpc.MethodDescriptor<com.google.cloud.channel.v1.ListPurchasableSkusRequest,
      com.google.cloud.channel.v1.ListPurchasableSkusResponse> getListPurchasableSkusMethod() {
    io.grpc.MethodDescriptor<com.google.cloud.channel.v1.ListPurchasableSkusRequest, com.google.cloud.channel.v1.ListPurchasableSkusResponse> getListPurchasableSkusMethod;
    if ((getListPurchasableSkusMethod = CloudChannelServiceGrpc.getListPurchasableSkusMethod) == null) {
      synchronized (CloudChannelServiceGrpc.class) {
        if ((getListPurchasableSkusMethod = CloudChannelServiceGrpc.getListPurchasableSkusMethod) == null) {
          CloudChannelServiceGrpc.getListPurchasableSkusMethod = getListPurchasableSkusMethod =
              io.grpc.MethodDescriptor.<com.google.cloud.channel.v1.ListPurchasableSkusRequest, com.google.cloud.channel.v1.ListPurchasableSkusResponse>newBuilder()
              .setType(io.grpc.MethodDescriptor.MethodType.UNARY)
              .setFullMethodName(generateFullMethodName(SERVICE_NAME, "ListPurchasableSkus"))
              .setSampledToLocalTracing(true)
              .setRequestMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.cloud.channel.v1.ListPurchasableSkusRequest.getDefaultInstance()))
              .setResponseMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.cloud.channel.v1.ListPurchasableSkusResponse.getDefaultInstance()))
              .setSchemaDescriptor(new CloudChannelServiceMethodDescriptorSupplier("ListPurchasableSkus"))
              .build();
        }
      }
    }
    return getListPurchasableSkusMethod;
  }

  private static volatile io.grpc.MethodDescriptor<com.google.cloud.channel.v1.ListPurchasableOffersRequest,
      com.google.cloud.channel.v1.ListPurchasableOffersResponse> getListPurchasableOffersMethod;

  @io.grpc.stub.annotations.RpcMethod(
      fullMethodName = SERVICE_NAME + '/' + "ListPurchasableOffers",
      requestType = com.google.cloud.channel.v1.ListPurchasableOffersRequest.class,
      responseType = com.google.cloud.channel.v1.ListPurchasableOffersResponse.class,
      methodType = io.grpc.MethodDescriptor.MethodType.UNARY)
  public static io.grpc.MethodDescriptor<com.google.cloud.channel.v1.ListPurchasableOffersRequest,
      com.google.cloud.channel.v1.ListPurchasableOffersResponse> getListPurchasableOffersMethod() {
    io.grpc.MethodDescriptor<com.google.cloud.channel.v1.ListPurchasableOffersRequest, com.google.cloud.channel.v1.ListPurchasableOffersResponse> getListPurchasableOffersMethod;
    if ((getListPurchasableOffersMethod = CloudChannelServiceGrpc.getListPurchasableOffersMethod) == null) {
      synchronized (CloudChannelServiceGrpc.class) {
        if ((getListPurchasableOffersMethod = CloudChannelServiceGrpc.getListPurchasableOffersMethod) == null) {
          CloudChannelServiceGrpc.getListPurchasableOffersMethod = getListPurchasableOffersMethod =
              io.grpc.MethodDescriptor.<com.google.cloud.channel.v1.ListPurchasableOffersRequest, com.google.cloud.channel.v1.ListPurchasableOffersResponse>newBuilder()
              .setType(io.grpc.MethodDescriptor.MethodType.UNARY)
              .setFullMethodName(generateFullMethodName(SERVICE_NAME, "ListPurchasableOffers"))
              .setSampledToLocalTracing(true)
              .setRequestMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.cloud.channel.v1.ListPurchasableOffersRequest.getDefaultInstance()))
              .setResponseMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.cloud.channel.v1.ListPurchasableOffersResponse.getDefaultInstance()))
              .setSchemaDescriptor(new CloudChannelServiceMethodDescriptorSupplier("ListPurchasableOffers"))
              .build();
        }
      }
    }
    return getListPurchasableOffersMethod;
  }

  private static volatile io.grpc.MethodDescriptor<com.google.cloud.channel.v1.RegisterSubscriberRequest,
      com.google.cloud.channel.v1.RegisterSubscriberResponse> getRegisterSubscriberMethod;

  @io.grpc.stub.annotations.RpcMethod(
      fullMethodName = SERVICE_NAME + '/' + "RegisterSubscriber",
      requestType = com.google.cloud.channel.v1.RegisterSubscriberRequest.class,
      responseType = com.google.cloud.channel.v1.RegisterSubscriberResponse.class,
      methodType = io.grpc.MethodDescriptor.MethodType.UNARY)
  public static io.grpc.MethodDescriptor<com.google.cloud.channel.v1.RegisterSubscriberRequest,
      com.google.cloud.channel.v1.RegisterSubscriberResponse> getRegisterSubscriberMethod() {
    io.grpc.MethodDescriptor<com.google.cloud.channel.v1.RegisterSubscriberRequest, com.google.cloud.channel.v1.RegisterSubscriberResponse> getRegisterSubscriberMethod;
    if ((getRegisterSubscriberMethod = CloudChannelServiceGrpc.getRegisterSubscriberMethod) == null) {
      synchronized (CloudChannelServiceGrpc.class) {
        if ((getRegisterSubscriberMethod = CloudChannelServiceGrpc.getRegisterSubscriberMethod) == null) {
          CloudChannelServiceGrpc.getRegisterSubscriberMethod = getRegisterSubscriberMethod =
              io.grpc.MethodDescriptor.<com.google.cloud.channel.v1.RegisterSubscriberRequest, com.google.cloud.channel.v1.RegisterSubscriberResponse>newBuilder()
              .setType(io.grpc.MethodDescriptor.MethodType.UNARY)
              .setFullMethodName(generateFullMethodName(SERVICE_NAME, "RegisterSubscriber"))
              .setSampledToLocalTracing(true)
              .setRequestMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.cloud.channel.v1.RegisterSubscriberRequest.getDefaultInstance()))
              .setResponseMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.cloud.channel.v1.RegisterSubscriberResponse.getDefaultInstance()))
              .setSchemaDescriptor(new CloudChannelServiceMethodDescriptorSupplier("RegisterSubscriber"))
              .build();
        }
      }
    }
    return getRegisterSubscriberMethod;
  }

  private static volatile io.grpc.MethodDescriptor<com.google.cloud.channel.v1.UnregisterSubscriberRequest,
      com.google.cloud.channel.v1.UnregisterSubscriberResponse> getUnregisterSubscriberMethod;

  @io.grpc.stub.annotations.RpcMethod(
      fullMethodName = SERVICE_NAME + '/' + "UnregisterSubscriber",
      requestType = com.google.cloud.channel.v1.UnregisterSubscriberRequest.class,
      responseType = com.google.cloud.channel.v1.UnregisterSubscriberResponse.class,
      methodType = io.grpc.MethodDescriptor.MethodType.UNARY)
  public static io.grpc.MethodDescriptor<com.google.cloud.channel.v1.UnregisterSubscriberRequest,
      com.google.cloud.channel.v1.UnregisterSubscriberResponse> getUnregisterSubscriberMethod() {
    io.grpc.MethodDescriptor<com.google.cloud.channel.v1.UnregisterSubscriberRequest, com.google.cloud.channel.v1.UnregisterSubscriberResponse> getUnregisterSubscriberMethod;
    if ((getUnregisterSubscriberMethod = CloudChannelServiceGrpc.getUnregisterSubscriberMethod) == null) {
      synchronized (CloudChannelServiceGrpc.class) {
        if ((getUnregisterSubscriberMethod = CloudChannelServiceGrpc.getUnregisterSubscriberMethod) == null) {
          CloudChannelServiceGrpc.getUnregisterSubscriberMethod = getUnregisterSubscriberMethod =
              io.grpc.MethodDescriptor.<com.google.cloud.channel.v1.UnregisterSubscriberRequest, com.google.cloud.channel.v1.UnregisterSubscriberResponse>newBuilder()
              .setType(io.grpc.MethodDescriptor.MethodType.UNARY)
              .setFullMethodName(generateFullMethodName(SERVICE_NAME, "UnregisterSubscriber"))
              .setSampledToLocalTracing(true)
              .setRequestMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.cloud.channel.v1.UnregisterSubscriberRequest.getDefaultInstance()))
              .setResponseMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.cloud.channel.v1.UnregisterSubscriberResponse.getDefaultInstance()))
              .setSchemaDescriptor(new CloudChannelServiceMethodDescriptorSupplier("UnregisterSubscriber"))
              .build();
        }
      }
    }
    return getUnregisterSubscriberMethod;
  }

  private static volatile io.grpc.MethodDescriptor<com.google.cloud.channel.v1.ListSubscribersRequest,
      com.google.cloud.channel.v1.ListSubscribersResponse> getListSubscribersMethod;

  @io.grpc.stub.annotations.RpcMethod(
      fullMethodName = SERVICE_NAME + '/' + "ListSubscribers",
      requestType = com.google.cloud.channel.v1.ListSubscribersRequest.class,
      responseType = com.google.cloud.channel.v1.ListSubscribersResponse.class,
      methodType = io.grpc.MethodDescriptor.MethodType.UNARY)
  public static io.grpc.MethodDescriptor<com.google.cloud.channel.v1.ListSubscribersRequest,
      com.google.cloud.channel.v1.ListSubscribersResponse> getListSubscribersMethod() {
    io.grpc.MethodDescriptor<com.google.cloud.channel.v1.ListSubscribersRequest, com.google.cloud.channel.v1.ListSubscribersResponse> getListSubscribersMethod;
    if ((getListSubscribersMethod = CloudChannelServiceGrpc.getListSubscribersMethod) == null) {
      synchronized (CloudChannelServiceGrpc.class) {
        if ((getListSubscribersMethod = CloudChannelServiceGrpc.getListSubscribersMethod) == null) {
          CloudChannelServiceGrpc.getListSubscribersMethod = getListSubscribersMethod =
              io.grpc.MethodDescriptor.<com.google.cloud.channel.v1.ListSubscribersRequest, com.google.cloud.channel.v1.ListSubscribersResponse>newBuilder()
              .setType(io.grpc.MethodDescriptor.MethodType.UNARY)
              .setFullMethodName(generateFullMethodName(SERVICE_NAME, "ListSubscribers"))
              .setSampledToLocalTracing(true)
              .setRequestMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.cloud.channel.v1.ListSubscribersRequest.getDefaultInstance()))
              .setResponseMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.cloud.channel.v1.ListSubscribersResponse.getDefaultInstance()))
              .setSchemaDescriptor(new CloudChannelServiceMethodDescriptorSupplier("ListSubscribers"))
              .build();
        }
      }
    }
    return getListSubscribersMethod;
  }

  /**
   * Creates a new async stub that supports all call types for the service
   */
  public static CloudChannelServiceStub newStub(io.grpc.Channel channel) {
    io.grpc.stub.AbstractStub.StubFactory<CloudChannelServiceStub> factory =
      new io.grpc.stub.AbstractStub.StubFactory<CloudChannelServiceStub>() {
        @java.lang.Override
        public CloudChannelServiceStub newStub(io.grpc.Channel channel, io.grpc.CallOptions callOptions) {
          return new CloudChannelServiceStub(channel, callOptions);
        }
      };
    return CloudChannelServiceStub.newStub(factory, channel);
  }

  /**
   * Creates a new blocking-style stub that supports unary and streaming output calls on the service
   */
  public static CloudChannelServiceBlockingStub newBlockingStub(
      io.grpc.Channel channel) {
    io.grpc.stub.AbstractStub.StubFactory<CloudChannelServiceBlockingStub> factory =
      new io.grpc.stub.AbstractStub.StubFactory<CloudChannelServiceBlockingStub>() {
        @java.lang.Override
        public CloudChannelServiceBlockingStub newStub(io.grpc.Channel channel, io.grpc.CallOptions callOptions) {
          return new CloudChannelServiceBlockingStub(channel, callOptions);
        }
      };
    return CloudChannelServiceBlockingStub.newStub(factory, channel);
  }

  /**
   * Creates a new ListenableFuture-style stub that supports unary calls on the service
   */
  public static CloudChannelServiceFutureStub newFutureStub(
      io.grpc.Channel channel) {
    io.grpc.stub.AbstractStub.StubFactory<CloudChannelServiceFutureStub> factory =
      new io.grpc.stub.AbstractStub.StubFactory<CloudChannelServiceFutureStub>() {
        @java.lang.Override
        public CloudChannelServiceFutureStub newStub(io.grpc.Channel channel, io.grpc.CallOptions callOptions) {
          return new CloudChannelServiceFutureStub(channel, callOptions);
        }
      };
    return CloudChannelServiceFutureStub.newStub(factory, channel);
  }

  /**
   * <pre>
   * CloudChannelService lets Google cloud resellers and distributors manage
   * their customers, channel partners, entitlements, and reports.
   * Using this service:
   * 1. Resellers and distributors can manage a customer entity.
   * 2. Distributors can register an authorized reseller in their channel and
   *    provide them with delegated admin access.
   * 3. Resellers and distributors can manage customer entitlements.
   * CloudChannelService exposes the following resources:
   * - [Customer][google.cloud.channel.v1.Customer]s: An entity—usually an enterprise—managed by a reseller or
   * distributor.
   * - [Entitlement][google.cloud.channel.v1.Entitlement]s: An entity that provides a customer with the means to use
   * a service. Entitlements are created or updated as a result of a successful
   * fulfillment.
   * - [ChannelPartnerLink][google.cloud.channel.v1.ChannelPartnerLink]s: An entity that identifies links between
   * distributors and their indirect resellers in a channel.
   * </pre>
   */
  public static abstract class CloudChannelServiceImplBase implements io.grpc.BindableService {

    /**
     * <pre>
     * List [Customer][google.cloud.channel.v1.Customer]s.
     * Possible error codes:
     * * PERMISSION_DENIED: The reseller account making the request is different
     * from the reseller account in the API request.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * Return value:
     * List of [Customer][google.cloud.channel.v1.Customer]s, or an empty list if there are no customers.
     * </pre>
     */
    public void listCustomers(com.google.cloud.channel.v1.ListCustomersRequest request,
        io.grpc.stub.StreamObserver<com.google.cloud.channel.v1.ListCustomersResponse> responseObserver) {
      io.grpc.stub.ServerCalls.asyncUnimplementedUnaryCall(getListCustomersMethod(), responseObserver);
    }

    /**
     * <pre>
     * Returns the requested [Customer][google.cloud.channel.v1.Customer] resource.
     * Possible error codes:
     * * PERMISSION_DENIED: The reseller account making the request is different
     * from the reseller account in the API request.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * NOT_FOUND: The customer resource doesn't exist. Usually the result of an
     * invalid name parameter.
     * Return value:
     * The [Customer][google.cloud.channel.v1.Customer] resource.
     * </pre>
     */
    public void getCustomer(com.google.cloud.channel.v1.GetCustomerRequest request,
        io.grpc.stub.StreamObserver<com.google.cloud.channel.v1.Customer> responseObserver) {
      io.grpc.stub.ServerCalls.asyncUnimplementedUnaryCall(getGetCustomerMethod(), responseObserver);
    }

    /**
     * <pre>
     * Confirms the existence of Cloud Identity accounts based on the domain and
     * if the Cloud Identity accounts are owned by the reseller.
     * Possible error codes:
     * * PERMISSION_DENIED: The reseller account making the request is different
     * from the reseller account in the API request.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * INVALID_VALUE: Invalid domain value in the request.
     * Return value:
     * A list of [CloudIdentityCustomerAccount][google.cloud.channel.v1.CloudIdentityCustomerAccount] resources for the domain (may be
     * empty)
     * Note: in the v1alpha1 version of the API, a NOT_FOUND error returns if
     * no [CloudIdentityCustomerAccount][google.cloud.channel.v1.CloudIdentityCustomerAccount] resources match the domain.
     * </pre>
     */
    public void checkCloudIdentityAccountsExist(com.google.cloud.channel.v1.CheckCloudIdentityAccountsExistRequest request,
        io.grpc.stub.StreamObserver<com.google.cloud.channel.v1.CheckCloudIdentityAccountsExistResponse> responseObserver) {
      io.grpc.stub.ServerCalls.asyncUnimplementedUnaryCall(getCheckCloudIdentityAccountsExistMethod(), responseObserver);
    }

    /**
     * <pre>
     * Creates a new [Customer][google.cloud.channel.v1.Customer] resource under the reseller or distributor
     * account.
     * Possible error codes:
     * * PERMISSION_DENIED: The reseller account making the request is different
     * from the reseller account in the API request.
     * * INVALID_ARGUMENT:
     *     * Required request parameters are missing or invalid.
     *     * Domain field value doesn't match the primary email domain.
     * Return value:
     * The newly created [Customer][google.cloud.channel.v1.Customer] resource.
     * </pre>
     */
    public void createCustomer(com.google.cloud.channel.v1.CreateCustomerRequest request,
        io.grpc.stub.StreamObserver<com.google.cloud.channel.v1.Customer> responseObserver) {
      io.grpc.stub.ServerCalls.asyncUnimplementedUnaryCall(getCreateCustomerMethod(), responseObserver);
    }

    /**
     * <pre>
     * Updates an existing [Customer][google.cloud.channel.v1.Customer] resource for the reseller or
     * distributor.
     * Possible error codes:
     * * PERMISSION_DENIED: The reseller account making the request is different
     * from the reseller account in the API request.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * NOT_FOUND: No [Customer][google.cloud.channel.v1.Customer] resource found for the name in the request.
     * Return value:
     * The updated [Customer][google.cloud.channel.v1.Customer] resource.
     * </pre>
     */
    public void updateCustomer(com.google.cloud.channel.v1.UpdateCustomerRequest request,
        io.grpc.stub.StreamObserver<com.google.cloud.channel.v1.Customer> responseObserver) {
      io.grpc.stub.ServerCalls.asyncUnimplementedUnaryCall(getUpdateCustomerMethod(), responseObserver);
    }

    /**
     * <pre>
     * Deletes the given [Customer][google.cloud.channel.v1.Customer] permanently.
     * Possible error codes:
     * * PERMISSION_DENIED: The account making the request does not own
     * this customer.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * FAILED_PRECONDITION: The customer has existing entitlements.
     * * NOT_FOUND: No [Customer][google.cloud.channel.v1.Customer] resource found for the name in the request.
     * </pre>
     */
    public void deleteCustomer(com.google.cloud.channel.v1.DeleteCustomerRequest request,
        io.grpc.stub.StreamObserver<com.google.protobuf.Empty> responseObserver) {
      io.grpc.stub.ServerCalls.asyncUnimplementedUnaryCall(getDeleteCustomerMethod(), responseObserver);
    }

    /**
     * <pre>
     * Creates a Cloud Identity for the given customer using the customer's
     * information, or the information provided here.
     * Possible error codes:
     * *  PERMISSION_DENIED: The customer doesn't belong to the reseller.
     * *  INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * *  NOT_FOUND: The customer was not found.
     * *  ALREADY_EXISTS: The customer's primary email already exists. Retry
     *    after changing the customer's primary contact email.
     * * INTERNAL: Any non-user error related to a technical issue in the
     * backend. Contact Cloud Channel support.
     * * UNKNOWN: Any non-user error related to a technical issue in the backend.
     * Contact Cloud Channel support.
     * Return value:
     * The ID of a long-running operation.
     * To get the results of the operation, call the GetOperation method of
     * CloudChannelOperationsService. The Operation metadata contains an
     * instance of [OperationMetadata][google.cloud.channel.v1.OperationMetadata].
     * </pre>
     */
    public void provisionCloudIdentity(com.google.cloud.channel.v1.ProvisionCloudIdentityRequest request,
        io.grpc.stub.StreamObserver<com.google.longrunning.Operation> responseObserver) {
      io.grpc.stub.ServerCalls.asyncUnimplementedUnaryCall(getProvisionCloudIdentityMethod(), responseObserver);
    }

    /**
     * <pre>
     * Lists [Entitlement][google.cloud.channel.v1.Entitlement]s belonging to a customer.
     * Possible error codes:
     * * PERMISSION_DENIED: The customer doesn't belong to the reseller.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * Return value:
     * A list of the customer's [Entitlement][google.cloud.channel.v1.Entitlement]s.
     * </pre>
     */
    public void listEntitlements(com.google.cloud.channel.v1.ListEntitlementsRequest request,
        io.grpc.stub.StreamObserver<com.google.cloud.channel.v1.ListEntitlementsResponse> responseObserver) {
      io.grpc.stub.ServerCalls.asyncUnimplementedUnaryCall(getListEntitlementsMethod(), responseObserver);
    }

    /**
     * <pre>
     * List [TransferableSku][google.cloud.channel.v1.TransferableSku]s of a customer based on the Cloud Identity ID or
     * Customer Name in the request.
     * Use this method to list the entitlements information of an
     * unowned customer. You should provide the customer's
     * Cloud Identity ID or Customer Name.
     * Possible error codes:
     * * PERMISSION_DENIED:
     *     * The customer doesn't belong to the reseller and has no auth token.
     *     * The supplied auth token is invalid.
     *     * The reseller account making the request is different
     *     from the reseller account in the query.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * Return value:
     * A list of the customer's [TransferableSku][google.cloud.channel.v1.TransferableSku].
     * </pre>
     */
    public void listTransferableSkus(com.google.cloud.channel.v1.ListTransferableSkusRequest request,
        io.grpc.stub.StreamObserver<com.google.cloud.channel.v1.ListTransferableSkusResponse> responseObserver) {
      io.grpc.stub.ServerCalls.asyncUnimplementedUnaryCall(getListTransferableSkusMethod(), responseObserver);
    }

    /**
     * <pre>
     * List [TransferableOffer][google.cloud.channel.v1.TransferableOffer]s of a customer based on Cloud Identity ID or
     * Customer Name in the request.
     * Use this method when a reseller gets the entitlement information of an
     * unowned customer. The reseller should provide the customer's
     * Cloud Identity ID or Customer Name.
     * Possible error codes:
     * * PERMISSION_DENIED:
     *     * The customer doesn't belong to the reseller and has no auth token.
     *     * The supplied auth token is invalid.
     *     * The reseller account making the request is different
     *     from the reseller account in the query.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * Return value:
     * List of [TransferableOffer][google.cloud.channel.v1.TransferableOffer] for the given customer and SKU.
     * </pre>
     */
    public void listTransferableOffers(com.google.cloud.channel.v1.ListTransferableOffersRequest request,
        io.grpc.stub.StreamObserver<com.google.cloud.channel.v1.ListTransferableOffersResponse> responseObserver) {
      io.grpc.stub.ServerCalls.asyncUnimplementedUnaryCall(getListTransferableOffersMethod(), responseObserver);
    }

    /**
     * <pre>
     * Returns the requested [Entitlement][google.cloud.channel.v1.Entitlement] resource.
     * Possible error codes:
     * * PERMISSION_DENIED: The customer doesn't belong to the reseller.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * NOT_FOUND: The customer entitlement was not found.
     * Return value:
     * The requested [Entitlement][google.cloud.channel.v1.Entitlement] resource.
     * </pre>
     */
    public void getEntitlement(com.google.cloud.channel.v1.GetEntitlementRequest request,
        io.grpc.stub.StreamObserver<com.google.cloud.channel.v1.Entitlement> responseObserver) {
      io.grpc.stub.ServerCalls.asyncUnimplementedUnaryCall(getGetEntitlementMethod(), responseObserver);
    }

    /**
     * <pre>
     * Creates an entitlement for a customer.
     * Possible error codes:
     * * PERMISSION_DENIED: The customer doesn't belong to the reseller.
     * * INVALID_ARGUMENT:
     *     * Required request parameters are missing or invalid.
     *     * There is already a customer entitlement for a SKU from the same
     *     product family.
     * * INVALID_VALUE: Make sure the OfferId is valid. If it is, contact
     * Google Channel support for further troubleshooting.
     * * NOT_FOUND: The customer or offer resource was not found.
     * * ALREADY_EXISTS:
     *     * The SKU was already purchased for the customer.
     *     * The customer's primary email already exists. Retry
     *     after changing the customer's primary contact email.
     * * CONDITION_NOT_MET or FAILED_PRECONDITION:
     *     * The domain required for purchasing a SKU has not been verified.
     *     * A pre-requisite SKU required to purchase an Add-On SKU is missing.
     *     For example, Google Workspace Business Starter is required to purchase
     *     Vault or Drive.
     *     * (Developer accounts only) Reseller and resold domain must meet the
     *     following naming requirements:
     *         * Domain names must start with goog-test.
     *         * Domain names must include the reseller domain.
     * * INTERNAL: Any non-user error related to a technical issue in the
     * backend. Contact Cloud Channel support.
     * * UNKNOWN: Any non-user error related to a technical issue in the backend.
     * Contact Cloud Channel support.
     * Return value:
     * The ID of a long-running operation.
     * To get the results of the operation, call the GetOperation method of
     * CloudChannelOperationsService. The Operation metadata will contain an
     * instance of [OperationMetadata][google.cloud.channel.v1.OperationMetadata].
     * </pre>
     */
    public void createEntitlement(com.google.cloud.channel.v1.CreateEntitlementRequest request,
        io.grpc.stub.StreamObserver<com.google.longrunning.Operation> responseObserver) {
      io.grpc.stub.ServerCalls.asyncUnimplementedUnaryCall(getCreateEntitlementMethod(), responseObserver);
    }

    /**
     * <pre>
     * Change parameters of the entitlement.
     * An entitlement update is a long-running operation and it updates the
     * entitlement as a result of fulfillment.
     * Possible error codes:
     * * PERMISSION_DENIED: The customer doesn't belong to the reseller.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * For example, the number of seats being changed is greater than the allowed
     * number of max seats, or decreasing seats for a commitment based plan.
     * * NOT_FOUND: Entitlement resource not found.
     * * INTERNAL: Any non-user error related to a technical issue in the
     * backend. Contact Cloud Channel support.
     * * UNKNOWN: Any non-user error related to a technical issue in the backend.
     * Contact Cloud Channel support.
     * Return value:
     * The ID of a long-running operation.
     * To get the results of the operation, call the GetOperation method of
     * CloudChannelOperationsService. The Operation metadata will contain an
     * instance of [OperationMetadata][google.cloud.channel.v1.OperationMetadata].
     * </pre>
     */
    public void changeParameters(com.google.cloud.channel.v1.ChangeParametersRequest request,
        io.grpc.stub.StreamObserver<com.google.longrunning.Operation> responseObserver) {
      io.grpc.stub.ServerCalls.asyncUnimplementedUnaryCall(getChangeParametersMethod(), responseObserver);
    }

    /**
     * <pre>
     * Updates the renewal settings for an existing customer entitlement.
     * An entitlement update is a long-running operation and it updates the
     * entitlement as a result of fulfillment.
     * Possible error codes:
     * * PERMISSION_DENIED: The customer doesn't belong to the reseller.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * NOT_FOUND: Entitlement resource not found.
     * * NOT_COMMITMENT_PLAN: Renewal Settings are only applicable for a
     * commitment plan. Can't enable or disable renewals for non-commitment plans.
     * * INTERNAL: Any non-user error related to a technical issue in the
     * backend. Contact Cloud Channel support.
     * * UNKNOWN: Any non-user error related to a technical issue in the backend.
     *   Contact Cloud Channel support.
     * Return value:
     * The ID of a long-running operation.
     * To get the results of the operation, call the GetOperation method of
     * CloudChannelOperationsService. The Operation metadata will contain an
     * instance of [OperationMetadata][google.cloud.channel.v1.OperationMetadata].
     * </pre>
     */
    public void changeRenewalSettings(com.google.cloud.channel.v1.ChangeRenewalSettingsRequest request,
        io.grpc.stub.StreamObserver<com.google.longrunning.Operation> responseObserver) {
      io.grpc.stub.ServerCalls.asyncUnimplementedUnaryCall(getChangeRenewalSettingsMethod(), responseObserver);
    }

    /**
     * <pre>
     * Updates the Offer for an existing customer entitlement.
     * An entitlement update is a long-running operation and it updates the
     * entitlement as a result of fulfillment.
     * Possible error codes:
     * * PERMISSION_DENIED: The customer doesn't belong to the reseller.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * NOT_FOUND: Offer or Entitlement resource not found.
     * * INTERNAL: Any non-user error related to a technical issue in the
     * backend. Contact Cloud Channel support.
     * * UNKNOWN: Any non-user error related to a technical issue in the backend.
     * Contact Cloud Channel support.
     * Return value:
     * The ID of a long-running operation.
     * To get the results of the operation, call the GetOperation method of
     * CloudChannelOperationsService. The Operation metadata will contain an
     * instance of [OperationMetadata][google.cloud.channel.v1.OperationMetadata].
     * </pre>
     */
    public void changeOffer(com.google.cloud.channel.v1.ChangeOfferRequest request,
        io.grpc.stub.StreamObserver<com.google.longrunning.Operation> responseObserver) {
      io.grpc.stub.ServerCalls.asyncUnimplementedUnaryCall(getChangeOfferMethod(), responseObserver);
    }

    /**
     * <pre>
     * Starts paid service for a trial entitlement.
     * Starts paid service for a trial entitlement immediately. This method is
     * only applicable if a plan is set up for a trial entitlement but has some
     * trial days remaining.
     * Possible error codes:
     * * PERMISSION_DENIED: The customer doesn't belong to the reseller.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * NOT_FOUND: Entitlement resource not found.
     * * FAILED_PRECONDITION/NOT_IN_TRIAL: This method only works for
     * entitlement on trial plans.
     * * INTERNAL: Any non-user error related to a technical issue in the
     * backend. Contact Cloud Channel support.
     * * UNKNOWN: Any non-user error related to a technical issue in the backend.
     * Contact Cloud Channel support.
     * Return value:
     * The ID of a long-running operation.
     * To get the results of the operation, call the GetOperation method of
     * CloudChannelOperationsService. The Operation metadata will contain an
     * instance of [OperationMetadata][google.cloud.channel.v1.OperationMetadata].
     * </pre>
     */
    public void startPaidService(com.google.cloud.channel.v1.StartPaidServiceRequest request,
        io.grpc.stub.StreamObserver<com.google.longrunning.Operation> responseObserver) {
      io.grpc.stub.ServerCalls.asyncUnimplementedUnaryCall(getStartPaidServiceMethod(), responseObserver);
    }

    /**
     * <pre>
     * Suspends a previously fulfilled entitlement.
     * An entitlement suspension is a long-running operation.
     * Possible error codes:
     * * PERMISSION_DENIED: The customer doesn't belong to the reseller.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * NOT_FOUND: Entitlement resource not found.
     * * NOT_ACTIVE: Entitlement is not active.
     * * INTERNAL: Any non-user error related to a technical issue in the
     * backend. Contact Cloud Channel support.
     * * UNKNOWN: Any non-user error related to a technical issue in the backend.
     * Contact Cloud Channel support.
     * Return value:
     * The ID of a long-running operation.
     * To get the results of the operation, call the GetOperation method of
     * CloudChannelOperationsService. The Operation metadata will contain an
     * instance of [OperationMetadata][google.cloud.channel.v1.OperationMetadata].
     * </pre>
     */
    public void suspendEntitlement(com.google.cloud.channel.v1.SuspendEntitlementRequest request,
        io.grpc.stub.StreamObserver<com.google.longrunning.Operation> responseObserver) {
      io.grpc.stub.ServerCalls.asyncUnimplementedUnaryCall(getSuspendEntitlementMethod(), responseObserver);
    }

    /**
     * <pre>
     * Cancels a previously fulfilled entitlement.
     * An entitlement cancellation is a long-running operation.
     * Possible error codes:
     * * PERMISSION_DENIED: The reseller account making the request is different
     * from the reseller account in the API request.
     * * FAILED_PRECONDITION: There are Google Cloud projects linked to the
     * Google Cloud entitlement's Cloud Billing subaccount.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * NOT_FOUND: Entitlement resource not found.
     * * DELETION_TYPE_NOT_ALLOWED: Cancel is only allowed for Google Workspace
     * add-ons, or entitlements for Google Cloud's development platform.
     * * INTERNAL: Any non-user error related to a technical issue in the
     * backend. Contact Cloud Channel support.
     * * UNKNOWN: Any non-user error related to a technical issue in the backend.
     * Contact Cloud Channel support.
     * Return value:
     * The ID of a long-running operation.
     * To get the results of the operation, call the GetOperation method of
     * CloudChannelOperationsService. The response will contain
     * google.protobuf.Empty on success. The Operation metadata will contain an
     * instance of [OperationMetadata][google.cloud.channel.v1.OperationMetadata].
     * </pre>
     */
    public void cancelEntitlement(com.google.cloud.channel.v1.CancelEntitlementRequest request,
        io.grpc.stub.StreamObserver<com.google.longrunning.Operation> responseObserver) {
      io.grpc.stub.ServerCalls.asyncUnimplementedUnaryCall(getCancelEntitlementMethod(), responseObserver);
    }

    /**
     * <pre>
     * Activates a previously suspended entitlement. Entitlements suspended for
     * pending ToS acceptance can't be activated using this method.
     * An entitlement activation is a long-running operation and it updates
     * the state of the customer entitlement.
     * Possible error codes:
     * * PERMISSION_DENIED: The reseller account making the request is different
     * from the reseller account in the API request.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * NOT_FOUND: Entitlement resource not found.
     * * SUSPENSION_NOT_RESELLER_INITIATED: Can only activate reseller-initiated
     * suspensions and entitlements that have accepted the TOS.
     * * NOT_SUSPENDED: Can only activate suspended entitlements not in an ACTIVE
     * state.
     * * INTERNAL: Any non-user error related to a technical issue in the
     * backend. Contact Cloud Channel support.
     * * UNKNOWN: Any non-user error related to a technical issue in the backend.
     * Contact Cloud Channel support.
     * Return value:
     * The ID of a long-running operation.
     * To get the results of the operation, call the GetOperation method of
     * CloudChannelOperationsService. The Operation metadata will contain an
     * instance of [OperationMetadata][google.cloud.channel.v1.OperationMetadata].
     * </pre>
     */
    public void activateEntitlement(com.google.cloud.channel.v1.ActivateEntitlementRequest request,
        io.grpc.stub.StreamObserver<com.google.longrunning.Operation> responseObserver) {
      io.grpc.stub.ServerCalls.asyncUnimplementedUnaryCall(getActivateEntitlementMethod(), responseObserver);
    }

    /**
     * <pre>
     * Transfers customer entitlements to new reseller.
     * Possible error codes:
     * * PERMISSION_DENIED: The customer doesn't belong to the reseller.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * NOT_FOUND: The customer or offer resource was not found.
     * * ALREADY_EXISTS: The SKU was already transferred for the customer.
     * * CONDITION_NOT_MET or FAILED_PRECONDITION:
     *     * The SKU requires domain verification to transfer, but the domain is
     *     not verified.
     *     * An Add-On SKU (example, Vault or Drive) is missing the
     *     pre-requisite SKU (example, G Suite Basic).
     *     * (Developer accounts only) Reseller and resold domain must meet the
     *     following naming requirements:
     *         * Domain names must start with goog-test.
     *         * Domain names must include the reseller domain.
     *     * Specify all transferring entitlements.
     * * INTERNAL: Any non-user error related to a technical issue in the
     * backend. Contact Cloud Channel support.
     * * UNKNOWN: Any non-user error related to a technical issue in the backend.
     * Contact Cloud Channel support.
     * Return value:
     * The ID of a long-running operation.
     * To get the results of the operation, call the GetOperation method of
     * CloudChannelOperationsService. The Operation metadata will contain an
     * instance of [OperationMetadata][google.cloud.channel.v1.OperationMetadata].
     * </pre>
     */
    public void transferEntitlements(com.google.cloud.channel.v1.TransferEntitlementsRequest request,
        io.grpc.stub.StreamObserver<com.google.longrunning.Operation> responseObserver) {
      io.grpc.stub.ServerCalls.asyncUnimplementedUnaryCall(getTransferEntitlementsMethod(), responseObserver);
    }

    /**
     * <pre>
     * Transfers customer entitlements from their current reseller to Google.
     * Possible error codes:
     * * PERMISSION_DENIED: The customer doesn't belong to the reseller.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * NOT_FOUND: The customer or offer resource was not found.
     * * ALREADY_EXISTS: The SKU was already transferred for the customer.
     * * CONDITION_NOT_MET or FAILED_PRECONDITION:
     *     * The SKU requires domain verification to transfer, but the domain is
     *     not verified.
     *     * An Add-On SKU (example, Vault or Drive) is missing the
     *     pre-requisite SKU (example, G Suite Basic).
     *     * (Developer accounts only) Reseller and resold domain must meet the
     *     following naming requirements:
     *         * Domain names must start with goog-test.
     *         * Domain names must include the reseller domain.
     * * INTERNAL: Any non-user error related to a technical issue in the
     * backend. Contact Cloud Channel support.
     * * UNKNOWN: Any non-user error related to a technical issue in the backend.
     * Contact Cloud Channel support.
     * Return value:
     * The ID of a long-running operation.
     * To get the results of the operation, call the GetOperation method of
     * CloudChannelOperationsService. The response will contain
     * google.protobuf.Empty on success. The Operation metadata will contain an
     * instance of [OperationMetadata][google.cloud.channel.v1.OperationMetadata].
     * </pre>
     */
    public void transferEntitlementsToGoogle(com.google.cloud.channel.v1.TransferEntitlementsToGoogleRequest request,
        io.grpc.stub.StreamObserver<com.google.longrunning.Operation> responseObserver) {
      io.grpc.stub.ServerCalls.asyncUnimplementedUnaryCall(getTransferEntitlementsToGoogleMethod(), responseObserver);
    }

    /**
     * <pre>
     * List [ChannelPartnerLink][google.cloud.channel.v1.ChannelPartnerLink]s belonging to a distributor.
     * You must be a distributor to call this method.
     * Possible error codes:
     * * PERMISSION_DENIED: The reseller account making the request is different
     * from the reseller account in the API request.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * Return value:
     * The list of the distributor account's [ChannelPartnerLink][google.cloud.channel.v1.ChannelPartnerLink] resources.
     * </pre>
     */
    public void listChannelPartnerLinks(com.google.cloud.channel.v1.ListChannelPartnerLinksRequest request,
        io.grpc.stub.StreamObserver<com.google.cloud.channel.v1.ListChannelPartnerLinksResponse> responseObserver) {
      io.grpc.stub.ServerCalls.asyncUnimplementedUnaryCall(getListChannelPartnerLinksMethod(), responseObserver);
    }

    /**
     * <pre>
     * Returns the requested [ChannelPartnerLink][google.cloud.channel.v1.ChannelPartnerLink] resource.
     * You must be a distributor to call this method.
     * Possible error codes:
     * * PERMISSION_DENIED: The reseller account making the request is different
     * from the reseller account in the API request.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * NOT_FOUND: ChannelPartnerLink resource not found because of an
     * invalid channel partner link name.
     * Return value:
     * The [ChannelPartnerLink][google.cloud.channel.v1.ChannelPartnerLink] resource.
     * </pre>
     */
    public void getChannelPartnerLink(com.google.cloud.channel.v1.GetChannelPartnerLinkRequest request,
        io.grpc.stub.StreamObserver<com.google.cloud.channel.v1.ChannelPartnerLink> responseObserver) {
      io.grpc.stub.ServerCalls.asyncUnimplementedUnaryCall(getGetChannelPartnerLinkMethod(), responseObserver);
    }

    /**
     * <pre>
     * Initiates a channel partner link between a distributor and a reseller, or
     * between resellers in an n-tier reseller channel.
     * Invited partners need to follow the invite_link_uri provided in the
     * response to accept. After accepting the invitation, a link is set up
     * between the two parties.
     * You must be a distributor to call this method.
     * Possible error codes:
     * * PERMISSION_DENIED: The reseller account making the request is different
     * from the reseller account in the API request.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * ALREADY_EXISTS: The ChannelPartnerLink sent in the request already
     * exists.
     * * NOT_FOUND: No Cloud Identity customer exists for provided domain.
     * * INTERNAL: Any non-user error related to a technical issue in the
     * backend. Contact Cloud Channel support.
     * * UNKNOWN: Any non-user error related to a technical issue in the backend.
     * Contact Cloud Channel support.
     * Return value:
     * The new [ChannelPartnerLink][google.cloud.channel.v1.ChannelPartnerLink] resource.
     * </pre>
     */
    public void createChannelPartnerLink(com.google.cloud.channel.v1.CreateChannelPartnerLinkRequest request,
        io.grpc.stub.StreamObserver<com.google.cloud.channel.v1.ChannelPartnerLink> responseObserver) {
      io.grpc.stub.ServerCalls.asyncUnimplementedUnaryCall(getCreateChannelPartnerLinkMethod(), responseObserver);
    }

    /**
     * <pre>
     * Updates a channel partner link. Distributors call this method to change a
     * link's status. For example, to suspend a partner link.
     * You must be a distributor to call this method.
     * Possible error codes:
     * * PERMISSION_DENIED: The reseller account making the request is different
     * from the reseller account in the API request.
     * * INVALID_ARGUMENT:
     *     * Required request parameters are missing or invalid.
     *     * Link state cannot change from invited to active or suspended.
     *     * Cannot send reseller_cloud_identity_id, invite_url, or name in update
     *     mask.
     * * NOT_FOUND: ChannelPartnerLink resource not found.
     * * INTERNAL: Any non-user error related to a technical issue in the
     * backend. Contact Cloud Channel support.
     * * UNKNOWN: Any non-user error related to a technical issue in the backend.
     * Contact Cloud Channel support.
     * Return value:
     * The updated [ChannelPartnerLink][google.cloud.channel.v1.ChannelPartnerLink] resource.
     * </pre>
     */
    public void updateChannelPartnerLink(com.google.cloud.channel.v1.UpdateChannelPartnerLinkRequest request,
        io.grpc.stub.StreamObserver<com.google.cloud.channel.v1.ChannelPartnerLink> responseObserver) {
      io.grpc.stub.ServerCalls.asyncUnimplementedUnaryCall(getUpdateChannelPartnerLinkMethod(), responseObserver);
    }

    /**
     * <pre>
     * Returns the requested [Offer][google.cloud.channel.v1.Offer] resource.
     * Possible error codes:
     * * PERMISSION_DENIED: The entitlement doesn't belong to the reseller.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * NOT_FOUND: Entitlement or offer was not found.
     * Return value:
     * The [Offer][google.cloud.channel.v1.Offer] resource.
     * </pre>
     */
    public void lookupOffer(com.google.cloud.channel.v1.LookupOfferRequest request,
        io.grpc.stub.StreamObserver<com.google.cloud.channel.v1.Offer> responseObserver) {
      io.grpc.stub.ServerCalls.asyncUnimplementedUnaryCall(getLookupOfferMethod(), responseObserver);
    }

    /**
     * <pre>
     * Lists the Products the reseller is authorized to sell.
     * Possible error codes:
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * </pre>
     */
    public void listProducts(com.google.cloud.channel.v1.ListProductsRequest request,
        io.grpc.stub.StreamObserver<com.google.cloud.channel.v1.ListProductsResponse> responseObserver) {
      io.grpc.stub.ServerCalls.asyncUnimplementedUnaryCall(getListProductsMethod(), responseObserver);
    }

    /**
     * <pre>
     * Lists the SKUs for a product the reseller is authorized to sell.
     * Possible error codes:
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * </pre>
     */
    public void listSkus(com.google.cloud.channel.v1.ListSkusRequest request,
        io.grpc.stub.StreamObserver<com.google.cloud.channel.v1.ListSkusResponse> responseObserver) {
      io.grpc.stub.ServerCalls.asyncUnimplementedUnaryCall(getListSkusMethod(), responseObserver);
    }

    /**
     * <pre>
     * Lists the Offers the reseller can sell.
     * Possible error codes:
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * </pre>
     */
    public void listOffers(com.google.cloud.channel.v1.ListOffersRequest request,
        io.grpc.stub.StreamObserver<com.google.cloud.channel.v1.ListOffersResponse> responseObserver) {
      io.grpc.stub.ServerCalls.asyncUnimplementedUnaryCall(getListOffersMethod(), responseObserver);
    }

    /**
     * <pre>
     * Lists the following:
     * * SKUs that you can purchase for a customer
     * * SKUs that you can upgrade or downgrade for an entitlement.
     * Possible error codes:
     * * PERMISSION_DENIED: The customer doesn't belong to the reseller.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * </pre>
     */
    public void listPurchasableSkus(com.google.cloud.channel.v1.ListPurchasableSkusRequest request,
        io.grpc.stub.StreamObserver<com.google.cloud.channel.v1.ListPurchasableSkusResponse> responseObserver) {
      io.grpc.stub.ServerCalls.asyncUnimplementedUnaryCall(getListPurchasableSkusMethod(), responseObserver);
    }

    /**
     * <pre>
     * Lists the following:
     * * Offers that you can purchase for a customer.
     * * Offers that you can change for an entitlement.
     * Possible error codes:
     * * PERMISSION_DENIED: The customer doesn't belong to the reseller
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * </pre>
     */
    public void listPurchasableOffers(com.google.cloud.channel.v1.ListPurchasableOffersRequest request,
        io.grpc.stub.StreamObserver<com.google.cloud.channel.v1.ListPurchasableOffersResponse> responseObserver) {
      io.grpc.stub.ServerCalls.asyncUnimplementedUnaryCall(getListPurchasableOffersMethod(), responseObserver);
    }

    /**
     * <pre>
     * Registers a service account with subscriber privileges on the Cloud Pub/Sub
     * topic for this Channel Services account. After you create a
     * subscriber, you get the events through [SubscriberEvent][google.cloud.channel.v1.SubscriberEvent]
     * Possible error codes:
     * * PERMISSION_DENIED: The reseller account making the request and the
     * provided reseller account are different, or the impersonated user
     * is not a super admin.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * INTERNAL: Any non-user error related to a technical issue in the
     * backend. Contact Cloud Channel support.
     * * UNKNOWN: Any non-user error related to a technical issue in the backend.
     * Contact Cloud Channel support.
     * Return value:
     * The topic name with the registered service email address.
     * </pre>
     */
    public void registerSubscriber(com.google.cloud.channel.v1.RegisterSubscriberRequest request,
        io.grpc.stub.StreamObserver<com.google.cloud.channel.v1.RegisterSubscriberResponse> responseObserver) {
      io.grpc.stub.ServerCalls.asyncUnimplementedUnaryCall(getRegisterSubscriberMethod(), responseObserver);
    }

    /**
     * <pre>
     * Unregisters a service account with subscriber privileges on the Cloud
     * Pub/Sub topic created for this Channel Services account. If there are no
     * service accounts left with subscriber privileges, this deletes the topic.
     * You can call ListSubscribers to check for these accounts.
     * Possible error codes:
     * * PERMISSION_DENIED: The reseller account making the request and the
     * provided reseller account are different, or the impersonated user
     * is not a super admin.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * NOT_FOUND: The topic resource doesn't exist.
     * * INTERNAL: Any non-user error related to a technical issue in the
     * backend. Contact Cloud Channel support.
     * * UNKNOWN: Any non-user error related to a technical issue in the backend.
     * Contact Cloud Channel support.
     * Return value:
     * The topic name that unregistered the service email address.
     * Returns a success response if the service email address wasn't registered
     * with the topic.
     * </pre>
     */
    public void unregisterSubscriber(com.google.cloud.channel.v1.UnregisterSubscriberRequest request,
        io.grpc.stub.StreamObserver<com.google.cloud.channel.v1.UnregisterSubscriberResponse> responseObserver) {
      io.grpc.stub.ServerCalls.asyncUnimplementedUnaryCall(getUnregisterSubscriberMethod(), responseObserver);
    }

    /**
     * <pre>
     * Lists service accounts with subscriber privileges on the Cloud Pub/Sub
     * topic created for this Channel Services account.
     * Possible error codes:
     * * PERMISSION_DENIED: The reseller account making the request and the
     * provided reseller account are different, or the impersonated user
     * is not a super admin.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * NOT_FOUND: The topic resource doesn't exist.
     * * INTERNAL: Any non-user error related to a technical issue in the
     * backend. Contact Cloud Channel support.
     * * UNKNOWN: Any non-user error related to a technical issue in the backend.
     * Contact Cloud Channel support.
     * Return value:
     * A list of service email addresses.
     * </pre>
     */
    public void listSubscribers(com.google.cloud.channel.v1.ListSubscribersRequest request,
        io.grpc.stub.StreamObserver<com.google.cloud.channel.v1.ListSubscribersResponse> responseObserver) {
      io.grpc.stub.ServerCalls.asyncUnimplementedUnaryCall(getListSubscribersMethod(), responseObserver);
    }

    @java.lang.Override public final io.grpc.ServerServiceDefinition bindService() {
      return io.grpc.ServerServiceDefinition.builder(getServiceDescriptor())
          .addMethod(
            getListCustomersMethod(),
            io.grpc.stub.ServerCalls.asyncUnaryCall(
              new MethodHandlers<
                com.google.cloud.channel.v1.ListCustomersRequest,
                com.google.cloud.channel.v1.ListCustomersResponse>(
                  this, METHODID_LIST_CUSTOMERS)))
          .addMethod(
            getGetCustomerMethod(),
            io.grpc.stub.ServerCalls.asyncUnaryCall(
              new MethodHandlers<
                com.google.cloud.channel.v1.GetCustomerRequest,
                com.google.cloud.channel.v1.Customer>(
                  this, METHODID_GET_CUSTOMER)))
          .addMethod(
            getCheckCloudIdentityAccountsExistMethod(),
            io.grpc.stub.ServerCalls.asyncUnaryCall(
              new MethodHandlers<
                com.google.cloud.channel.v1.CheckCloudIdentityAccountsExistRequest,
                com.google.cloud.channel.v1.CheckCloudIdentityAccountsExistResponse>(
                  this, METHODID_CHECK_CLOUD_IDENTITY_ACCOUNTS_EXIST)))
          .addMethod(
            getCreateCustomerMethod(),
            io.grpc.stub.ServerCalls.asyncUnaryCall(
              new MethodHandlers<
                com.google.cloud.channel.v1.CreateCustomerRequest,
                com.google.cloud.channel.v1.Customer>(
                  this, METHODID_CREATE_CUSTOMER)))
          .addMethod(
            getUpdateCustomerMethod(),
            io.grpc.stub.ServerCalls.asyncUnaryCall(
              new MethodHandlers<
                com.google.cloud.channel.v1.UpdateCustomerRequest,
                com.google.cloud.channel.v1.Customer>(
                  this, METHODID_UPDATE_CUSTOMER)))
          .addMethod(
            getDeleteCustomerMethod(),
            io.grpc.stub.ServerCalls.asyncUnaryCall(
              new MethodHandlers<
                com.google.cloud.channel.v1.DeleteCustomerRequest,
                com.google.protobuf.Empty>(
                  this, METHODID_DELETE_CUSTOMER)))
          .addMethod(
            getProvisionCloudIdentityMethod(),
            io.grpc.stub.ServerCalls.asyncUnaryCall(
              new MethodHandlers<
                com.google.cloud.channel.v1.ProvisionCloudIdentityRequest,
                com.google.longrunning.Operation>(
                  this, METHODID_PROVISION_CLOUD_IDENTITY)))
          .addMethod(
            getListEntitlementsMethod(),
            io.grpc.stub.ServerCalls.asyncUnaryCall(
              new MethodHandlers<
                com.google.cloud.channel.v1.ListEntitlementsRequest,
                com.google.cloud.channel.v1.ListEntitlementsResponse>(
                  this, METHODID_LIST_ENTITLEMENTS)))
          .addMethod(
            getListTransferableSkusMethod(),
            io.grpc.stub.ServerCalls.asyncUnaryCall(
              new MethodHandlers<
                com.google.cloud.channel.v1.ListTransferableSkusRequest,
                com.google.cloud.channel.v1.ListTransferableSkusResponse>(
                  this, METHODID_LIST_TRANSFERABLE_SKUS)))
          .addMethod(
            getListTransferableOffersMethod(),
            io.grpc.stub.ServerCalls.asyncUnaryCall(
              new MethodHandlers<
                com.google.cloud.channel.v1.ListTransferableOffersRequest,
                com.google.cloud.channel.v1.ListTransferableOffersResponse>(
                  this, METHODID_LIST_TRANSFERABLE_OFFERS)))
          .addMethod(
            getGetEntitlementMethod(),
            io.grpc.stub.ServerCalls.asyncUnaryCall(
              new MethodHandlers<
                com.google.cloud.channel.v1.GetEntitlementRequest,
                com.google.cloud.channel.v1.Entitlement>(
                  this, METHODID_GET_ENTITLEMENT)))
          .addMethod(
            getCreateEntitlementMethod(),
            io.grpc.stub.ServerCalls.asyncUnaryCall(
              new MethodHandlers<
                com.google.cloud.channel.v1.CreateEntitlementRequest,
                com.google.longrunning.Operation>(
                  this, METHODID_CREATE_ENTITLEMENT)))
          .addMethod(
            getChangeParametersMethod(),
            io.grpc.stub.ServerCalls.asyncUnaryCall(
              new MethodHandlers<
                com.google.cloud.channel.v1.ChangeParametersRequest,
                com.google.longrunning.Operation>(
                  this, METHODID_CHANGE_PARAMETERS)))
          .addMethod(
            getChangeRenewalSettingsMethod(),
            io.grpc.stub.ServerCalls.asyncUnaryCall(
              new MethodHandlers<
                com.google.cloud.channel.v1.ChangeRenewalSettingsRequest,
                com.google.longrunning.Operation>(
                  this, METHODID_CHANGE_RENEWAL_SETTINGS)))
          .addMethod(
            getChangeOfferMethod(),
            io.grpc.stub.ServerCalls.asyncUnaryCall(
              new MethodHandlers<
                com.google.cloud.channel.v1.ChangeOfferRequest,
                com.google.longrunning.Operation>(
                  this, METHODID_CHANGE_OFFER)))
          .addMethod(
            getStartPaidServiceMethod(),
            io.grpc.stub.ServerCalls.asyncUnaryCall(
              new MethodHandlers<
                com.google.cloud.channel.v1.StartPaidServiceRequest,
                com.google.longrunning.Operation>(
                  this, METHODID_START_PAID_SERVICE)))
          .addMethod(
            getSuspendEntitlementMethod(),
            io.grpc.stub.ServerCalls.asyncUnaryCall(
              new MethodHandlers<
                com.google.cloud.channel.v1.SuspendEntitlementRequest,
                com.google.longrunning.Operation>(
                  this, METHODID_SUSPEND_ENTITLEMENT)))
          .addMethod(
            getCancelEntitlementMethod(),
            io.grpc.stub.ServerCalls.asyncUnaryCall(
              new MethodHandlers<
                com.google.cloud.channel.v1.CancelEntitlementRequest,
                com.google.longrunning.Operation>(
                  this, METHODID_CANCEL_ENTITLEMENT)))
          .addMethod(
            getActivateEntitlementMethod(),
            io.grpc.stub.ServerCalls.asyncUnaryCall(
              new MethodHandlers<
                com.google.cloud.channel.v1.ActivateEntitlementRequest,
                com.google.longrunning.Operation>(
                  this, METHODID_ACTIVATE_ENTITLEMENT)))
          .addMethod(
            getTransferEntitlementsMethod(),
            io.grpc.stub.ServerCalls.asyncUnaryCall(
              new MethodHandlers<
                com.google.cloud.channel.v1.TransferEntitlementsRequest,
                com.google.longrunning.Operation>(
                  this, METHODID_TRANSFER_ENTITLEMENTS)))
          .addMethod(
            getTransferEntitlementsToGoogleMethod(),
            io.grpc.stub.ServerCalls.asyncUnaryCall(
              new MethodHandlers<
                com.google.cloud.channel.v1.TransferEntitlementsToGoogleRequest,
                com.google.longrunning.Operation>(
                  this, METHODID_TRANSFER_ENTITLEMENTS_TO_GOOGLE)))
          .addMethod(
            getListChannelPartnerLinksMethod(),
            io.grpc.stub.ServerCalls.asyncUnaryCall(
              new MethodHandlers<
                com.google.cloud.channel.v1.ListChannelPartnerLinksRequest,
                com.google.cloud.channel.v1.ListChannelPartnerLinksResponse>(
                  this, METHODID_LIST_CHANNEL_PARTNER_LINKS)))
          .addMethod(
            getGetChannelPartnerLinkMethod(),
            io.grpc.stub.ServerCalls.asyncUnaryCall(
              new MethodHandlers<
                com.google.cloud.channel.v1.GetChannelPartnerLinkRequest,
                com.google.cloud.channel.v1.ChannelPartnerLink>(
                  this, METHODID_GET_CHANNEL_PARTNER_LINK)))
          .addMethod(
            getCreateChannelPartnerLinkMethod(),
            io.grpc.stub.ServerCalls.asyncUnaryCall(
              new MethodHandlers<
                com.google.cloud.channel.v1.CreateChannelPartnerLinkRequest,
                com.google.cloud.channel.v1.ChannelPartnerLink>(
                  this, METHODID_CREATE_CHANNEL_PARTNER_LINK)))
          .addMethod(
            getUpdateChannelPartnerLinkMethod(),
            io.grpc.stub.ServerCalls.asyncUnaryCall(
              new MethodHandlers<
                com.google.cloud.channel.v1.UpdateChannelPartnerLinkRequest,
                com.google.cloud.channel.v1.ChannelPartnerLink>(
                  this, METHODID_UPDATE_CHANNEL_PARTNER_LINK)))
          .addMethod(
            getLookupOfferMethod(),
            io.grpc.stub.ServerCalls.asyncUnaryCall(
              new MethodHandlers<
                com.google.cloud.channel.v1.LookupOfferRequest,
                com.google.cloud.channel.v1.Offer>(
                  this, METHODID_LOOKUP_OFFER)))
          .addMethod(
            getListProductsMethod(),
            io.grpc.stub.ServerCalls.asyncUnaryCall(
              new MethodHandlers<
                com.google.cloud.channel.v1.ListProductsRequest,
                com.google.cloud.channel.v1.ListProductsResponse>(
                  this, METHODID_LIST_PRODUCTS)))
          .addMethod(
            getListSkusMethod(),
            io.grpc.stub.ServerCalls.asyncUnaryCall(
              new MethodHandlers<
                com.google.cloud.channel.v1.ListSkusRequest,
                com.google.cloud.channel.v1.ListSkusResponse>(
                  this, METHODID_LIST_SKUS)))
          .addMethod(
            getListOffersMethod(),
            io.grpc.stub.ServerCalls.asyncUnaryCall(
              new MethodHandlers<
                com.google.cloud.channel.v1.ListOffersRequest,
                com.google.cloud.channel.v1.ListOffersResponse>(
                  this, METHODID_LIST_OFFERS)))
          .addMethod(
            getListPurchasableSkusMethod(),
            io.grpc.stub.ServerCalls.asyncUnaryCall(
              new MethodHandlers<
                com.google.cloud.channel.v1.ListPurchasableSkusRequest,
                com.google.cloud.channel.v1.ListPurchasableSkusResponse>(
                  this, METHODID_LIST_PURCHASABLE_SKUS)))
          .addMethod(
            getListPurchasableOffersMethod(),
            io.grpc.stub.ServerCalls.asyncUnaryCall(
              new MethodHandlers<
                com.google.cloud.channel.v1.ListPurchasableOffersRequest,
                com.google.cloud.channel.v1.ListPurchasableOffersResponse>(
                  this, METHODID_LIST_PURCHASABLE_OFFERS)))
          .addMethod(
            getRegisterSubscriberMethod(),
            io.grpc.stub.ServerCalls.asyncUnaryCall(
              new MethodHandlers<
                com.google.cloud.channel.v1.RegisterSubscriberRequest,
                com.google.cloud.channel.v1.RegisterSubscriberResponse>(
                  this, METHODID_REGISTER_SUBSCRIBER)))
          .addMethod(
            getUnregisterSubscriberMethod(),
            io.grpc.stub.ServerCalls.asyncUnaryCall(
              new MethodHandlers<
                com.google.cloud.channel.v1.UnregisterSubscriberRequest,
                com.google.cloud.channel.v1.UnregisterSubscriberResponse>(
                  this, METHODID_UNREGISTER_SUBSCRIBER)))
          .addMethod(
            getListSubscribersMethod(),
            io.grpc.stub.ServerCalls.asyncUnaryCall(
              new MethodHandlers<
                com.google.cloud.channel.v1.ListSubscribersRequest,
                com.google.cloud.channel.v1.ListSubscribersResponse>(
                  this, METHODID_LIST_SUBSCRIBERS)))
          .build();
    }
  }

  /**
   * <pre>
   * CloudChannelService lets Google cloud resellers and distributors manage
   * their customers, channel partners, entitlements, and reports.
   * Using this service:
   * 1. Resellers and distributors can manage a customer entity.
   * 2. Distributors can register an authorized reseller in their channel and
   *    provide them with delegated admin access.
   * 3. Resellers and distributors can manage customer entitlements.
   * CloudChannelService exposes the following resources:
   * - [Customer][google.cloud.channel.v1.Customer]s: An entity—usually an enterprise—managed by a reseller or
   * distributor.
   * - [Entitlement][google.cloud.channel.v1.Entitlement]s: An entity that provides a customer with the means to use
   * a service. Entitlements are created or updated as a result of a successful
   * fulfillment.
   * - [ChannelPartnerLink][google.cloud.channel.v1.ChannelPartnerLink]s: An entity that identifies links between
   * distributors and their indirect resellers in a channel.
   * </pre>
   */
  public static final class CloudChannelServiceStub extends io.grpc.stub.AbstractAsyncStub<CloudChannelServiceStub> {
    private CloudChannelServiceStub(
        io.grpc.Channel channel, io.grpc.CallOptions callOptions) {
      super(channel, callOptions);
    }

    @java.lang.Override
    protected CloudChannelServiceStub build(
        io.grpc.Channel channel, io.grpc.CallOptions callOptions) {
      return new CloudChannelServiceStub(channel, callOptions);
    }

    /**
     * <pre>
     * List [Customer][google.cloud.channel.v1.Customer]s.
     * Possible error codes:
     * * PERMISSION_DENIED: The reseller account making the request is different
     * from the reseller account in the API request.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * Return value:
     * List of [Customer][google.cloud.channel.v1.Customer]s, or an empty list if there are no customers.
     * </pre>
     */
    public void listCustomers(com.google.cloud.channel.v1.ListCustomersRequest request,
        io.grpc.stub.StreamObserver<com.google.cloud.channel.v1.ListCustomersResponse> responseObserver) {
      io.grpc.stub.ClientCalls.asyncUnaryCall(
          getChannel().newCall(getListCustomersMethod(), getCallOptions()), request, responseObserver);
    }

    /**
     * <pre>
     * Returns the requested [Customer][google.cloud.channel.v1.Customer] resource.
     * Possible error codes:
     * * PERMISSION_DENIED: The reseller account making the request is different
     * from the reseller account in the API request.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * NOT_FOUND: The customer resource doesn't exist. Usually the result of an
     * invalid name parameter.
     * Return value:
     * The [Customer][google.cloud.channel.v1.Customer] resource.
     * </pre>
     */
    public void getCustomer(com.google.cloud.channel.v1.GetCustomerRequest request,
        io.grpc.stub.StreamObserver<com.google.cloud.channel.v1.Customer> responseObserver) {
      io.grpc.stub.ClientCalls.asyncUnaryCall(
          getChannel().newCall(getGetCustomerMethod(), getCallOptions()), request, responseObserver);
    }

    /**
     * <pre>
     * Confirms the existence of Cloud Identity accounts based on the domain and
     * if the Cloud Identity accounts are owned by the reseller.
     * Possible error codes:
     * * PERMISSION_DENIED: The reseller account making the request is different
     * from the reseller account in the API request.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * INVALID_VALUE: Invalid domain value in the request.
     * Return value:
     * A list of [CloudIdentityCustomerAccount][google.cloud.channel.v1.CloudIdentityCustomerAccount] resources for the domain (may be
     * empty)
     * Note: in the v1alpha1 version of the API, a NOT_FOUND error returns if
     * no [CloudIdentityCustomerAccount][google.cloud.channel.v1.CloudIdentityCustomerAccount] resources match the domain.
     * </pre>
     */
    public void checkCloudIdentityAccountsExist(com.google.cloud.channel.v1.CheckCloudIdentityAccountsExistRequest request,
        io.grpc.stub.StreamObserver<com.google.cloud.channel.v1.CheckCloudIdentityAccountsExistResponse> responseObserver) {
      io.grpc.stub.ClientCalls.asyncUnaryCall(
          getChannel().newCall(getCheckCloudIdentityAccountsExistMethod(), getCallOptions()), request, responseObserver);
    }

    /**
     * <pre>
     * Creates a new [Customer][google.cloud.channel.v1.Customer] resource under the reseller or distributor
     * account.
     * Possible error codes:
     * * PERMISSION_DENIED: The reseller account making the request is different
     * from the reseller account in the API request.
     * * INVALID_ARGUMENT:
     *     * Required request parameters are missing or invalid.
     *     * Domain field value doesn't match the primary email domain.
     * Return value:
     * The newly created [Customer][google.cloud.channel.v1.Customer] resource.
     * </pre>
     */
    public void createCustomer(com.google.cloud.channel.v1.CreateCustomerRequest request,
        io.grpc.stub.StreamObserver<com.google.cloud.channel.v1.Customer> responseObserver) {
      io.grpc.stub.ClientCalls.asyncUnaryCall(
          getChannel().newCall(getCreateCustomerMethod(), getCallOptions()), request, responseObserver);
    }

    /**
     * <pre>
     * Updates an existing [Customer][google.cloud.channel.v1.Customer] resource for the reseller or
     * distributor.
     * Possible error codes:
     * * PERMISSION_DENIED: The reseller account making the request is different
     * from the reseller account in the API request.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * NOT_FOUND: No [Customer][google.cloud.channel.v1.Customer] resource found for the name in the request.
     * Return value:
     * The updated [Customer][google.cloud.channel.v1.Customer] resource.
     * </pre>
     */
    public void updateCustomer(com.google.cloud.channel.v1.UpdateCustomerRequest request,
        io.grpc.stub.StreamObserver<com.google.cloud.channel.v1.Customer> responseObserver) {
      io.grpc.stub.ClientCalls.asyncUnaryCall(
          getChannel().newCall(getUpdateCustomerMethod(), getCallOptions()), request, responseObserver);
    }

    /**
     * <pre>
     * Deletes the given [Customer][google.cloud.channel.v1.Customer] permanently.
     * Possible error codes:
     * * PERMISSION_DENIED: The account making the request does not own
     * this customer.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * FAILED_PRECONDITION: The customer has existing entitlements.
     * * NOT_FOUND: No [Customer][google.cloud.channel.v1.Customer] resource found for the name in the request.
     * </pre>
     */
    public void deleteCustomer(com.google.cloud.channel.v1.DeleteCustomerRequest request,
        io.grpc.stub.StreamObserver<com.google.protobuf.Empty> responseObserver) {
      io.grpc.stub.ClientCalls.asyncUnaryCall(
          getChannel().newCall(getDeleteCustomerMethod(), getCallOptions()), request, responseObserver);
    }

    /**
     * <pre>
     * Creates a Cloud Identity for the given customer using the customer's
     * information, or the information provided here.
     * Possible error codes:
     * *  PERMISSION_DENIED: The customer doesn't belong to the reseller.
     * *  INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * *  NOT_FOUND: The customer was not found.
     * *  ALREADY_EXISTS: The customer's primary email already exists. Retry
     *    after changing the customer's primary contact email.
     * * INTERNAL: Any non-user error related to a technical issue in the
     * backend. Contact Cloud Channel support.
     * * UNKNOWN: Any non-user error related to a technical issue in the backend.
     * Contact Cloud Channel support.
     * Return value:
     * The ID of a long-running operation.
     * To get the results of the operation, call the GetOperation method of
     * CloudChannelOperationsService. The Operation metadata contains an
     * instance of [OperationMetadata][google.cloud.channel.v1.OperationMetadata].
     * </pre>
     */
    public void provisionCloudIdentity(com.google.cloud.channel.v1.ProvisionCloudIdentityRequest request,
        io.grpc.stub.StreamObserver<com.google.longrunning.Operation> responseObserver) {
      io.grpc.stub.ClientCalls.asyncUnaryCall(
          getChannel().newCall(getProvisionCloudIdentityMethod(), getCallOptions()), request, responseObserver);
    }

    /**
     * <pre>
     * Lists [Entitlement][google.cloud.channel.v1.Entitlement]s belonging to a customer.
     * Possible error codes:
     * * PERMISSION_DENIED: The customer doesn't belong to the reseller.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * Return value:
     * A list of the customer's [Entitlement][google.cloud.channel.v1.Entitlement]s.
     * </pre>
     */
    public void listEntitlements(com.google.cloud.channel.v1.ListEntitlementsRequest request,
        io.grpc.stub.StreamObserver<com.google.cloud.channel.v1.ListEntitlementsResponse> responseObserver) {
      io.grpc.stub.ClientCalls.asyncUnaryCall(
          getChannel().newCall(getListEntitlementsMethod(), getCallOptions()), request, responseObserver);
    }

    /**
     * <pre>
     * List [TransferableSku][google.cloud.channel.v1.TransferableSku]s of a customer based on the Cloud Identity ID or
     * Customer Name in the request.
     * Use this method to list the entitlements information of an
     * unowned customer. You should provide the customer's
     * Cloud Identity ID or Customer Name.
     * Possible error codes:
     * * PERMISSION_DENIED:
     *     * The customer doesn't belong to the reseller and has no auth token.
     *     * The supplied auth token is invalid.
     *     * The reseller account making the request is different
     *     from the reseller account in the query.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * Return value:
     * A list of the customer's [TransferableSku][google.cloud.channel.v1.TransferableSku].
     * </pre>
     */
    public void listTransferableSkus(com.google.cloud.channel.v1.ListTransferableSkusRequest request,
        io.grpc.stub.StreamObserver<com.google.cloud.channel.v1.ListTransferableSkusResponse> responseObserver) {
      io.grpc.stub.ClientCalls.asyncUnaryCall(
          getChannel().newCall(getListTransferableSkusMethod(), getCallOptions()), request, responseObserver);
    }

    /**
     * <pre>
     * List [TransferableOffer][google.cloud.channel.v1.TransferableOffer]s of a customer based on Cloud Identity ID or
     * Customer Name in the request.
     * Use this method when a reseller gets the entitlement information of an
     * unowned customer. The reseller should provide the customer's
     * Cloud Identity ID or Customer Name.
     * Possible error codes:
     * * PERMISSION_DENIED:
     *     * The customer doesn't belong to the reseller and has no auth token.
     *     * The supplied auth token is invalid.
     *     * The reseller account making the request is different
     *     from the reseller account in the query.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * Return value:
     * List of [TransferableOffer][google.cloud.channel.v1.TransferableOffer] for the given customer and SKU.
     * </pre>
     */
    public void listTransferableOffers(com.google.cloud.channel.v1.ListTransferableOffersRequest request,
        io.grpc.stub.StreamObserver<com.google.cloud.channel.v1.ListTransferableOffersResponse> responseObserver) {
      io.grpc.stub.ClientCalls.asyncUnaryCall(
          getChannel().newCall(getListTransferableOffersMethod(), getCallOptions()), request, responseObserver);
    }

    /**
     * <pre>
     * Returns the requested [Entitlement][google.cloud.channel.v1.Entitlement] resource.
     * Possible error codes:
     * * PERMISSION_DENIED: The customer doesn't belong to the reseller.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * NOT_FOUND: The customer entitlement was not found.
     * Return value:
     * The requested [Entitlement][google.cloud.channel.v1.Entitlement] resource.
     * </pre>
     */
    public void getEntitlement(com.google.cloud.channel.v1.GetEntitlementRequest request,
        io.grpc.stub.StreamObserver<com.google.cloud.channel.v1.Entitlement> responseObserver) {
      io.grpc.stub.ClientCalls.asyncUnaryCall(
          getChannel().newCall(getGetEntitlementMethod(), getCallOptions()), request, responseObserver);
    }

    /**
     * <pre>
     * Creates an entitlement for a customer.
     * Possible error codes:
     * * PERMISSION_DENIED: The customer doesn't belong to the reseller.
     * * INVALID_ARGUMENT:
     *     * Required request parameters are missing or invalid.
     *     * There is already a customer entitlement for a SKU from the same
     *     product family.
     * * INVALID_VALUE: Make sure the OfferId is valid. If it is, contact
     * Google Channel support for further troubleshooting.
     * * NOT_FOUND: The customer or offer resource was not found.
     * * ALREADY_EXISTS:
     *     * The SKU was already purchased for the customer.
     *     * The customer's primary email already exists. Retry
     *     after changing the customer's primary contact email.
     * * CONDITION_NOT_MET or FAILED_PRECONDITION:
     *     * The domain required for purchasing a SKU has not been verified.
     *     * A pre-requisite SKU required to purchase an Add-On SKU is missing.
     *     For example, Google Workspace Business Starter is required to purchase
     *     Vault or Drive.
     *     * (Developer accounts only) Reseller and resold domain must meet the
     *     following naming requirements:
     *         * Domain names must start with goog-test.
     *         * Domain names must include the reseller domain.
     * * INTERNAL: Any non-user error related to a technical issue in the
     * backend. Contact Cloud Channel support.
     * * UNKNOWN: Any non-user error related to a technical issue in the backend.
     * Contact Cloud Channel support.
     * Return value:
     * The ID of a long-running operation.
     * To get the results of the operation, call the GetOperation method of
     * CloudChannelOperationsService. The Operation metadata will contain an
     * instance of [OperationMetadata][google.cloud.channel.v1.OperationMetadata].
     * </pre>
     */
    public void createEntitlement(com.google.cloud.channel.v1.CreateEntitlementRequest request,
        io.grpc.stub.StreamObserver<com.google.longrunning.Operation> responseObserver) {
      io.grpc.stub.ClientCalls.asyncUnaryCall(
          getChannel().newCall(getCreateEntitlementMethod(), getCallOptions()), request, responseObserver);
    }

    /**
     * <pre>
     * Change parameters of the entitlement.
     * An entitlement update is a long-running operation and it updates the
     * entitlement as a result of fulfillment.
     * Possible error codes:
     * * PERMISSION_DENIED: The customer doesn't belong to the reseller.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * For example, the number of seats being changed is greater than the allowed
     * number of max seats, or decreasing seats for a commitment based plan.
     * * NOT_FOUND: Entitlement resource not found.
     * * INTERNAL: Any non-user error related to a technical issue in the
     * backend. Contact Cloud Channel support.
     * * UNKNOWN: Any non-user error related to a technical issue in the backend.
     * Contact Cloud Channel support.
     * Return value:
     * The ID of a long-running operation.
     * To get the results of the operation, call the GetOperation method of
     * CloudChannelOperationsService. The Operation metadata will contain an
     * instance of [OperationMetadata][google.cloud.channel.v1.OperationMetadata].
     * </pre>
     */
    public void changeParameters(com.google.cloud.channel.v1.ChangeParametersRequest request,
        io.grpc.stub.StreamObserver<com.google.longrunning.Operation> responseObserver) {
      io.grpc.stub.ClientCalls.asyncUnaryCall(
          getChannel().newCall(getChangeParametersMethod(), getCallOptions()), request, responseObserver);
    }

    /**
     * <pre>
     * Updates the renewal settings for an existing customer entitlement.
     * An entitlement update is a long-running operation and it updates the
     * entitlement as a result of fulfillment.
     * Possible error codes:
     * * PERMISSION_DENIED: The customer doesn't belong to the reseller.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * NOT_FOUND: Entitlement resource not found.
     * * NOT_COMMITMENT_PLAN: Renewal Settings are only applicable for a
     * commitment plan. Can't enable or disable renewals for non-commitment plans.
     * * INTERNAL: Any non-user error related to a technical issue in the
     * backend. Contact Cloud Channel support.
     * * UNKNOWN: Any non-user error related to a technical issue in the backend.
     *   Contact Cloud Channel support.
     * Return value:
     * The ID of a long-running operation.
     * To get the results of the operation, call the GetOperation method of
     * CloudChannelOperationsService. The Operation metadata will contain an
     * instance of [OperationMetadata][google.cloud.channel.v1.OperationMetadata].
     * </pre>
     */
    public void changeRenewalSettings(com.google.cloud.channel.v1.ChangeRenewalSettingsRequest request,
        io.grpc.stub.StreamObserver<com.google.longrunning.Operation> responseObserver) {
      io.grpc.stub.ClientCalls.asyncUnaryCall(
          getChannel().newCall(getChangeRenewalSettingsMethod(), getCallOptions()), request, responseObserver);
    }

    /**
     * <pre>
     * Updates the Offer for an existing customer entitlement.
     * An entitlement update is a long-running operation and it updates the
     * entitlement as a result of fulfillment.
     * Possible error codes:
     * * PERMISSION_DENIED: The customer doesn't belong to the reseller.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * NOT_FOUND: Offer or Entitlement resource not found.
     * * INTERNAL: Any non-user error related to a technical issue in the
     * backend. Contact Cloud Channel support.
     * * UNKNOWN: Any non-user error related to a technical issue in the backend.
     * Contact Cloud Channel support.
     * Return value:
     * The ID of a long-running operation.
     * To get the results of the operation, call the GetOperation method of
     * CloudChannelOperationsService. The Operation metadata will contain an
     * instance of [OperationMetadata][google.cloud.channel.v1.OperationMetadata].
     * </pre>
     */
    public void changeOffer(com.google.cloud.channel.v1.ChangeOfferRequest request,
        io.grpc.stub.StreamObserver<com.google.longrunning.Operation> responseObserver) {
      io.grpc.stub.ClientCalls.asyncUnaryCall(
          getChannel().newCall(getChangeOfferMethod(), getCallOptions()), request, responseObserver);
    }

    /**
     * <pre>
     * Starts paid service for a trial entitlement.
     * Starts paid service for a trial entitlement immediately. This method is
     * only applicable if a plan is set up for a trial entitlement but has some
     * trial days remaining.
     * Possible error codes:
     * * PERMISSION_DENIED: The customer doesn't belong to the reseller.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * NOT_FOUND: Entitlement resource not found.
     * * FAILED_PRECONDITION/NOT_IN_TRIAL: This method only works for
     * entitlement on trial plans.
     * * INTERNAL: Any non-user error related to a technical issue in the
     * backend. Contact Cloud Channel support.
     * * UNKNOWN: Any non-user error related to a technical issue in the backend.
     * Contact Cloud Channel support.
     * Return value:
     * The ID of a long-running operation.
     * To get the results of the operation, call the GetOperation method of
     * CloudChannelOperationsService. The Operation metadata will contain an
     * instance of [OperationMetadata][google.cloud.channel.v1.OperationMetadata].
     * </pre>
     */
    public void startPaidService(com.google.cloud.channel.v1.StartPaidServiceRequest request,
        io.grpc.stub.StreamObserver<com.google.longrunning.Operation> responseObserver) {
      io.grpc.stub.ClientCalls.asyncUnaryCall(
          getChannel().newCall(getStartPaidServiceMethod(), getCallOptions()), request, responseObserver);
    }

    /**
     * <pre>
     * Suspends a previously fulfilled entitlement.
     * An entitlement suspension is a long-running operation.
     * Possible error codes:
     * * PERMISSION_DENIED: The customer doesn't belong to the reseller.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * NOT_FOUND: Entitlement resource not found.
     * * NOT_ACTIVE: Entitlement is not active.
     * * INTERNAL: Any non-user error related to a technical issue in the
     * backend. Contact Cloud Channel support.
     * * UNKNOWN: Any non-user error related to a technical issue in the backend.
     * Contact Cloud Channel support.
     * Return value:
     * The ID of a long-running operation.
     * To get the results of the operation, call the GetOperation method of
     * CloudChannelOperationsService. The Operation metadata will contain an
     * instance of [OperationMetadata][google.cloud.channel.v1.OperationMetadata].
     * </pre>
     */
    public void suspendEntitlement(com.google.cloud.channel.v1.SuspendEntitlementRequest request,
        io.grpc.stub.StreamObserver<com.google.longrunning.Operation> responseObserver) {
      io.grpc.stub.ClientCalls.asyncUnaryCall(
          getChannel().newCall(getSuspendEntitlementMethod(), getCallOptions()), request, responseObserver);
    }

    /**
     * <pre>
     * Cancels a previously fulfilled entitlement.
     * An entitlement cancellation is a long-running operation.
     * Possible error codes:
     * * PERMISSION_DENIED: The reseller account making the request is different
     * from the reseller account in the API request.
     * * FAILED_PRECONDITION: There are Google Cloud projects linked to the
     * Google Cloud entitlement's Cloud Billing subaccount.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * NOT_FOUND: Entitlement resource not found.
     * * DELETION_TYPE_NOT_ALLOWED: Cancel is only allowed for Google Workspace
     * add-ons, or entitlements for Google Cloud's development platform.
     * * INTERNAL: Any non-user error related to a technical issue in the
     * backend. Contact Cloud Channel support.
     * * UNKNOWN: Any non-user error related to a technical issue in the backend.
     * Contact Cloud Channel support.
     * Return value:
     * The ID of a long-running operation.
     * To get the results of the operation, call the GetOperation method of
     * CloudChannelOperationsService. The response will contain
     * google.protobuf.Empty on success. The Operation metadata will contain an
     * instance of [OperationMetadata][google.cloud.channel.v1.OperationMetadata].
     * </pre>
     */
    public void cancelEntitlement(com.google.cloud.channel.v1.CancelEntitlementRequest request,
        io.grpc.stub.StreamObserver<com.google.longrunning.Operation> responseObserver) {
      io.grpc.stub.ClientCalls.asyncUnaryCall(
          getChannel().newCall(getCancelEntitlementMethod(), getCallOptions()), request, responseObserver);
    }

    /**
     * <pre>
     * Activates a previously suspended entitlement. Entitlements suspended for
     * pending ToS acceptance can't be activated using this method.
     * An entitlement activation is a long-running operation and it updates
     * the state of the customer entitlement.
     * Possible error codes:
     * * PERMISSION_DENIED: The reseller account making the request is different
     * from the reseller account in the API request.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * NOT_FOUND: Entitlement resource not found.
     * * SUSPENSION_NOT_RESELLER_INITIATED: Can only activate reseller-initiated
     * suspensions and entitlements that have accepted the TOS.
     * * NOT_SUSPENDED: Can only activate suspended entitlements not in an ACTIVE
     * state.
     * * INTERNAL: Any non-user error related to a technical issue in the
     * backend. Contact Cloud Channel support.
     * * UNKNOWN: Any non-user error related to a technical issue in the backend.
     * Contact Cloud Channel support.
     * Return value:
     * The ID of a long-running operation.
     * To get the results of the operation, call the GetOperation method of
     * CloudChannelOperationsService. The Operation metadata will contain an
     * instance of [OperationMetadata][google.cloud.channel.v1.OperationMetadata].
     * </pre>
     */
    public void activateEntitlement(com.google.cloud.channel.v1.ActivateEntitlementRequest request,
        io.grpc.stub.StreamObserver<com.google.longrunning.Operation> responseObserver) {
      io.grpc.stub.ClientCalls.asyncUnaryCall(
          getChannel().newCall(getActivateEntitlementMethod(), getCallOptions()), request, responseObserver);
    }

    /**
     * <pre>
     * Transfers customer entitlements to new reseller.
     * Possible error codes:
     * * PERMISSION_DENIED: The customer doesn't belong to the reseller.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * NOT_FOUND: The customer or offer resource was not found.
     * * ALREADY_EXISTS: The SKU was already transferred for the customer.
     * * CONDITION_NOT_MET or FAILED_PRECONDITION:
     *     * The SKU requires domain verification to transfer, but the domain is
     *     not verified.
     *     * An Add-On SKU (example, Vault or Drive) is missing the
     *     pre-requisite SKU (example, G Suite Basic).
     *     * (Developer accounts only) Reseller and resold domain must meet the
     *     following naming requirements:
     *         * Domain names must start with goog-test.
     *         * Domain names must include the reseller domain.
     *     * Specify all transferring entitlements.
     * * INTERNAL: Any non-user error related to a technical issue in the
     * backend. Contact Cloud Channel support.
     * * UNKNOWN: Any non-user error related to a technical issue in the backend.
     * Contact Cloud Channel support.
     * Return value:
     * The ID of a long-running operation.
     * To get the results of the operation, call the GetOperation method of
     * CloudChannelOperationsService. The Operation metadata will contain an
     * instance of [OperationMetadata][google.cloud.channel.v1.OperationMetadata].
     * </pre>
     */
    public void transferEntitlements(com.google.cloud.channel.v1.TransferEntitlementsRequest request,
        io.grpc.stub.StreamObserver<com.google.longrunning.Operation> responseObserver) {
      io.grpc.stub.ClientCalls.asyncUnaryCall(
          getChannel().newCall(getTransferEntitlementsMethod(), getCallOptions()), request, responseObserver);
    }

    /**
     * <pre>
     * Transfers customer entitlements from their current reseller to Google.
     * Possible error codes:
     * * PERMISSION_DENIED: The customer doesn't belong to the reseller.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * NOT_FOUND: The customer or offer resource was not found.
     * * ALREADY_EXISTS: The SKU was already transferred for the customer.
     * * CONDITION_NOT_MET or FAILED_PRECONDITION:
     *     * The SKU requires domain verification to transfer, but the domain is
     *     not verified.
     *     * An Add-On SKU (example, Vault or Drive) is missing the
     *     pre-requisite SKU (example, G Suite Basic).
     *     * (Developer accounts only) Reseller and resold domain must meet the
     *     following naming requirements:
     *         * Domain names must start with goog-test.
     *         * Domain names must include the reseller domain.
     * * INTERNAL: Any non-user error related to a technical issue in the
     * backend. Contact Cloud Channel support.
     * * UNKNOWN: Any non-user error related to a technical issue in the backend.
     * Contact Cloud Channel support.
     * Return value:
     * The ID of a long-running operation.
     * To get the results of the operation, call the GetOperation method of
     * CloudChannelOperationsService. The response will contain
     * google.protobuf.Empty on success. The Operation metadata will contain an
     * instance of [OperationMetadata][google.cloud.channel.v1.OperationMetadata].
     * </pre>
     */
    public void transferEntitlementsToGoogle(com.google.cloud.channel.v1.TransferEntitlementsToGoogleRequest request,
        io.grpc.stub.StreamObserver<com.google.longrunning.Operation> responseObserver) {
      io.grpc.stub.ClientCalls.asyncUnaryCall(
          getChannel().newCall(getTransferEntitlementsToGoogleMethod(), getCallOptions()), request, responseObserver);
    }

    /**
     * <pre>
     * List [ChannelPartnerLink][google.cloud.channel.v1.ChannelPartnerLink]s belonging to a distributor.
     * You must be a distributor to call this method.
     * Possible error codes:
     * * PERMISSION_DENIED: The reseller account making the request is different
     * from the reseller account in the API request.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * Return value:
     * The list of the distributor account's [ChannelPartnerLink][google.cloud.channel.v1.ChannelPartnerLink] resources.
     * </pre>
     */
    public void listChannelPartnerLinks(com.google.cloud.channel.v1.ListChannelPartnerLinksRequest request,
        io.grpc.stub.StreamObserver<com.google.cloud.channel.v1.ListChannelPartnerLinksResponse> responseObserver) {
      io.grpc.stub.ClientCalls.asyncUnaryCall(
          getChannel().newCall(getListChannelPartnerLinksMethod(), getCallOptions()), request, responseObserver);
    }

    /**
     * <pre>
     * Returns the requested [ChannelPartnerLink][google.cloud.channel.v1.ChannelPartnerLink] resource.
     * You must be a distributor to call this method.
     * Possible error codes:
     * * PERMISSION_DENIED: The reseller account making the request is different
     * from the reseller account in the API request.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * NOT_FOUND: ChannelPartnerLink resource not found because of an
     * invalid channel partner link name.
     * Return value:
     * The [ChannelPartnerLink][google.cloud.channel.v1.ChannelPartnerLink] resource.
     * </pre>
     */
    public void getChannelPartnerLink(com.google.cloud.channel.v1.GetChannelPartnerLinkRequest request,
        io.grpc.stub.StreamObserver<com.google.cloud.channel.v1.ChannelPartnerLink> responseObserver) {
      io.grpc.stub.ClientCalls.asyncUnaryCall(
          getChannel().newCall(getGetChannelPartnerLinkMethod(), getCallOptions()), request, responseObserver);
    }

    /**
     * <pre>
     * Initiates a channel partner link between a distributor and a reseller, or
     * between resellers in an n-tier reseller channel.
     * Invited partners need to follow the invite_link_uri provided in the
     * response to accept. After accepting the invitation, a link is set up
     * between the two parties.
     * You must be a distributor to call this method.
     * Possible error codes:
     * * PERMISSION_DENIED: The reseller account making the request is different
     * from the reseller account in the API request.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * ALREADY_EXISTS: The ChannelPartnerLink sent in the request already
     * exists.
     * * NOT_FOUND: No Cloud Identity customer exists for provided domain.
     * * INTERNAL: Any non-user error related to a technical issue in the
     * backend. Contact Cloud Channel support.
     * * UNKNOWN: Any non-user error related to a technical issue in the backend.
     * Contact Cloud Channel support.
     * Return value:
     * The new [ChannelPartnerLink][google.cloud.channel.v1.ChannelPartnerLink] resource.
     * </pre>
     */
    public void createChannelPartnerLink(com.google.cloud.channel.v1.CreateChannelPartnerLinkRequest request,
        io.grpc.stub.StreamObserver<com.google.cloud.channel.v1.ChannelPartnerLink> responseObserver) {
      io.grpc.stub.ClientCalls.asyncUnaryCall(
          getChannel().newCall(getCreateChannelPartnerLinkMethod(), getCallOptions()), request, responseObserver);
    }

    /**
     * <pre>
     * Updates a channel partner link. Distributors call this method to change a
     * link's status. For example, to suspend a partner link.
     * You must be a distributor to call this method.
     * Possible error codes:
     * * PERMISSION_DENIED: The reseller account making the request is different
     * from the reseller account in the API request.
     * * INVALID_ARGUMENT:
     *     * Required request parameters are missing or invalid.
     *     * Link state cannot change from invited to active or suspended.
     *     * Cannot send reseller_cloud_identity_id, invite_url, or name in update
     *     mask.
     * * NOT_FOUND: ChannelPartnerLink resource not found.
     * * INTERNAL: Any non-user error related to a technical issue in the
     * backend. Contact Cloud Channel support.
     * * UNKNOWN: Any non-user error related to a technical issue in the backend.
     * Contact Cloud Channel support.
     * Return value:
     * The updated [ChannelPartnerLink][google.cloud.channel.v1.ChannelPartnerLink] resource.
     * </pre>
     */
    public void updateChannelPartnerLink(com.google.cloud.channel.v1.UpdateChannelPartnerLinkRequest request,
        io.grpc.stub.StreamObserver<com.google.cloud.channel.v1.ChannelPartnerLink> responseObserver) {
      io.grpc.stub.ClientCalls.asyncUnaryCall(
          getChannel().newCall(getUpdateChannelPartnerLinkMethod(), getCallOptions()), request, responseObserver);
    }

    /**
     * <pre>
     * Returns the requested [Offer][google.cloud.channel.v1.Offer] resource.
     * Possible error codes:
     * * PERMISSION_DENIED: The entitlement doesn't belong to the reseller.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * NOT_FOUND: Entitlement or offer was not found.
     * Return value:
     * The [Offer][google.cloud.channel.v1.Offer] resource.
     * </pre>
     */
    public void lookupOffer(com.google.cloud.channel.v1.LookupOfferRequest request,
        io.grpc.stub.StreamObserver<com.google.cloud.channel.v1.Offer> responseObserver) {
      io.grpc.stub.ClientCalls.asyncUnaryCall(
          getChannel().newCall(getLookupOfferMethod(), getCallOptions()), request, responseObserver);
    }

    /**
     * <pre>
     * Lists the Products the reseller is authorized to sell.
     * Possible error codes:
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * </pre>
     */
    public void listProducts(com.google.cloud.channel.v1.ListProductsRequest request,
        io.grpc.stub.StreamObserver<com.google.cloud.channel.v1.ListProductsResponse> responseObserver) {
      io.grpc.stub.ClientCalls.asyncUnaryCall(
          getChannel().newCall(getListProductsMethod(), getCallOptions()), request, responseObserver);
    }

    /**
     * <pre>
     * Lists the SKUs for a product the reseller is authorized to sell.
     * Possible error codes:
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * </pre>
     */
    public void listSkus(com.google.cloud.channel.v1.ListSkusRequest request,
        io.grpc.stub.StreamObserver<com.google.cloud.channel.v1.ListSkusResponse> responseObserver) {
      io.grpc.stub.ClientCalls.asyncUnaryCall(
          getChannel().newCall(getListSkusMethod(), getCallOptions()), request, responseObserver);
    }

    /**
     * <pre>
     * Lists the Offers the reseller can sell.
     * Possible error codes:
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * </pre>
     */
    public void listOffers(com.google.cloud.channel.v1.ListOffersRequest request,
        io.grpc.stub.StreamObserver<com.google.cloud.channel.v1.ListOffersResponse> responseObserver) {
      io.grpc.stub.ClientCalls.asyncUnaryCall(
          getChannel().newCall(getListOffersMethod(), getCallOptions()), request, responseObserver);
    }

    /**
     * <pre>
     * Lists the following:
     * * SKUs that you can purchase for a customer
     * * SKUs that you can upgrade or downgrade for an entitlement.
     * Possible error codes:
     * * PERMISSION_DENIED: The customer doesn't belong to the reseller.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * </pre>
     */
    public void listPurchasableSkus(com.google.cloud.channel.v1.ListPurchasableSkusRequest request,
        io.grpc.stub.StreamObserver<com.google.cloud.channel.v1.ListPurchasableSkusResponse> responseObserver) {
      io.grpc.stub.ClientCalls.asyncUnaryCall(
          getChannel().newCall(getListPurchasableSkusMethod(), getCallOptions()), request, responseObserver);
    }

    /**
     * <pre>
     * Lists the following:
     * * Offers that you can purchase for a customer.
     * * Offers that you can change for an entitlement.
     * Possible error codes:
     * * PERMISSION_DENIED: The customer doesn't belong to the reseller
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * </pre>
     */
    public void listPurchasableOffers(com.google.cloud.channel.v1.ListPurchasableOffersRequest request,
        io.grpc.stub.StreamObserver<com.google.cloud.channel.v1.ListPurchasableOffersResponse> responseObserver) {
      io.grpc.stub.ClientCalls.asyncUnaryCall(
          getChannel().newCall(getListPurchasableOffersMethod(), getCallOptions()), request, responseObserver);
    }

    /**
     * <pre>
     * Registers a service account with subscriber privileges on the Cloud Pub/Sub
     * topic for this Channel Services account. After you create a
     * subscriber, you get the events through [SubscriberEvent][google.cloud.channel.v1.SubscriberEvent]
     * Possible error codes:
     * * PERMISSION_DENIED: The reseller account making the request and the
     * provided reseller account are different, or the impersonated user
     * is not a super admin.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * INTERNAL: Any non-user error related to a technical issue in the
     * backend. Contact Cloud Channel support.
     * * UNKNOWN: Any non-user error related to a technical issue in the backend.
     * Contact Cloud Channel support.
     * Return value:
     * The topic name with the registered service email address.
     * </pre>
     */
    public void registerSubscriber(com.google.cloud.channel.v1.RegisterSubscriberRequest request,
        io.grpc.stub.StreamObserver<com.google.cloud.channel.v1.RegisterSubscriberResponse> responseObserver) {
      io.grpc.stub.ClientCalls.asyncUnaryCall(
          getChannel().newCall(getRegisterSubscriberMethod(), getCallOptions()), request, responseObserver);
    }

    /**
     * <pre>
     * Unregisters a service account with subscriber privileges on the Cloud
     * Pub/Sub topic created for this Channel Services account. If there are no
     * service accounts left with subscriber privileges, this deletes the topic.
     * You can call ListSubscribers to check for these accounts.
     * Possible error codes:
     * * PERMISSION_DENIED: The reseller account making the request and the
     * provided reseller account are different, or the impersonated user
     * is not a super admin.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * NOT_FOUND: The topic resource doesn't exist.
     * * INTERNAL: Any non-user error related to a technical issue in the
     * backend. Contact Cloud Channel support.
     * * UNKNOWN: Any non-user error related to a technical issue in the backend.
     * Contact Cloud Channel support.
     * Return value:
     * The topic name that unregistered the service email address.
     * Returns a success response if the service email address wasn't registered
     * with the topic.
     * </pre>
     */
    public void unregisterSubscriber(com.google.cloud.channel.v1.UnregisterSubscriberRequest request,
        io.grpc.stub.StreamObserver<com.google.cloud.channel.v1.UnregisterSubscriberResponse> responseObserver) {
      io.grpc.stub.ClientCalls.asyncUnaryCall(
          getChannel().newCall(getUnregisterSubscriberMethod(), getCallOptions()), request, responseObserver);
    }

    /**
     * <pre>
     * Lists service accounts with subscriber privileges on the Cloud Pub/Sub
     * topic created for this Channel Services account.
     * Possible error codes:
     * * PERMISSION_DENIED: The reseller account making the request and the
     * provided reseller account are different, or the impersonated user
     * is not a super admin.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * NOT_FOUND: The topic resource doesn't exist.
     * * INTERNAL: Any non-user error related to a technical issue in the
     * backend. Contact Cloud Channel support.
     * * UNKNOWN: Any non-user error related to a technical issue in the backend.
     * Contact Cloud Channel support.
     * Return value:
     * A list of service email addresses.
     * </pre>
     */
    public void listSubscribers(com.google.cloud.channel.v1.ListSubscribersRequest request,
        io.grpc.stub.StreamObserver<com.google.cloud.channel.v1.ListSubscribersResponse> responseObserver) {
      io.grpc.stub.ClientCalls.asyncUnaryCall(
          getChannel().newCall(getListSubscribersMethod(), getCallOptions()), request, responseObserver);
    }
  }

  /**
   * <pre>
   * CloudChannelService lets Google cloud resellers and distributors manage
   * their customers, channel partners, entitlements, and reports.
   * Using this service:
   * 1. Resellers and distributors can manage a customer entity.
   * 2. Distributors can register an authorized reseller in their channel and
   *    provide them with delegated admin access.
   * 3. Resellers and distributors can manage customer entitlements.
   * CloudChannelService exposes the following resources:
   * - [Customer][google.cloud.channel.v1.Customer]s: An entity—usually an enterprise—managed by a reseller or
   * distributor.
   * - [Entitlement][google.cloud.channel.v1.Entitlement]s: An entity that provides a customer with the means to use
   * a service. Entitlements are created or updated as a result of a successful
   * fulfillment.
   * - [ChannelPartnerLink][google.cloud.channel.v1.ChannelPartnerLink]s: An entity that identifies links between
   * distributors and their indirect resellers in a channel.
   * </pre>
   */
  public static final class CloudChannelServiceBlockingStub extends io.grpc.stub.AbstractBlockingStub<CloudChannelServiceBlockingStub> {
    private CloudChannelServiceBlockingStub(
        io.grpc.Channel channel, io.grpc.CallOptions callOptions) {
      super(channel, callOptions);
    }

    @java.lang.Override
    protected CloudChannelServiceBlockingStub build(
        io.grpc.Channel channel, io.grpc.CallOptions callOptions) {
      return new CloudChannelServiceBlockingStub(channel, callOptions);
    }

    /**
     * <pre>
     * List [Customer][google.cloud.channel.v1.Customer]s.
     * Possible error codes:
     * * PERMISSION_DENIED: The reseller account making the request is different
     * from the reseller account in the API request.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * Return value:
     * List of [Customer][google.cloud.channel.v1.Customer]s, or an empty list if there are no customers.
     * </pre>
     */
    public com.google.cloud.channel.v1.ListCustomersResponse listCustomers(com.google.cloud.channel.v1.ListCustomersRequest request) {
      return io.grpc.stub.ClientCalls.blockingUnaryCall(
          getChannel(), getListCustomersMethod(), getCallOptions(), request);
    }

    /**
     * <pre>
     * Returns the requested [Customer][google.cloud.channel.v1.Customer] resource.
     * Possible error codes:
     * * PERMISSION_DENIED: The reseller account making the request is different
     * from the reseller account in the API request.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * NOT_FOUND: The customer resource doesn't exist. Usually the result of an
     * invalid name parameter.
     * Return value:
     * The [Customer][google.cloud.channel.v1.Customer] resource.
     * </pre>
     */
    public com.google.cloud.channel.v1.Customer getCustomer(com.google.cloud.channel.v1.GetCustomerRequest request) {
      return io.grpc.stub.ClientCalls.blockingUnaryCall(
          getChannel(), getGetCustomerMethod(), getCallOptions(), request);
    }

    /**
     * <pre>
     * Confirms the existence of Cloud Identity accounts based on the domain and
     * if the Cloud Identity accounts are owned by the reseller.
     * Possible error codes:
     * * PERMISSION_DENIED: The reseller account making the request is different
     * from the reseller account in the API request.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * INVALID_VALUE: Invalid domain value in the request.
     * Return value:
     * A list of [CloudIdentityCustomerAccount][google.cloud.channel.v1.CloudIdentityCustomerAccount] resources for the domain (may be
     * empty)
     * Note: in the v1alpha1 version of the API, a NOT_FOUND error returns if
     * no [CloudIdentityCustomerAccount][google.cloud.channel.v1.CloudIdentityCustomerAccount] resources match the domain.
     * </pre>
     */
    public com.google.cloud.channel.v1.CheckCloudIdentityAccountsExistResponse checkCloudIdentityAccountsExist(com.google.cloud.channel.v1.CheckCloudIdentityAccountsExistRequest request) {
      return io.grpc.stub.ClientCalls.blockingUnaryCall(
          getChannel(), getCheckCloudIdentityAccountsExistMethod(), getCallOptions(), request);
    }

    /**
     * <pre>
     * Creates a new [Customer][google.cloud.channel.v1.Customer] resource under the reseller or distributor
     * account.
     * Possible error codes:
     * * PERMISSION_DENIED: The reseller account making the request is different
     * from the reseller account in the API request.
     * * INVALID_ARGUMENT:
     *     * Required request parameters are missing or invalid.
     *     * Domain field value doesn't match the primary email domain.
     * Return value:
     * The newly created [Customer][google.cloud.channel.v1.Customer] resource.
     * </pre>
     */
    public com.google.cloud.channel.v1.Customer createCustomer(com.google.cloud.channel.v1.CreateCustomerRequest request) {
      return io.grpc.stub.ClientCalls.blockingUnaryCall(
          getChannel(), getCreateCustomerMethod(), getCallOptions(), request);
    }

    /**
     * <pre>
     * Updates an existing [Customer][google.cloud.channel.v1.Customer] resource for the reseller or
     * distributor.
     * Possible error codes:
     * * PERMISSION_DENIED: The reseller account making the request is different
     * from the reseller account in the API request.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * NOT_FOUND: No [Customer][google.cloud.channel.v1.Customer] resource found for the name in the request.
     * Return value:
     * The updated [Customer][google.cloud.channel.v1.Customer] resource.
     * </pre>
     */
    public com.google.cloud.channel.v1.Customer updateCustomer(com.google.cloud.channel.v1.UpdateCustomerRequest request) {
      return io.grpc.stub.ClientCalls.blockingUnaryCall(
          getChannel(), getUpdateCustomerMethod(), getCallOptions(), request);
    }

    /**
     * <pre>
     * Deletes the given [Customer][google.cloud.channel.v1.Customer] permanently.
     * Possible error codes:
     * * PERMISSION_DENIED: The account making the request does not own
     * this customer.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * FAILED_PRECONDITION: The customer has existing entitlements.
     * * NOT_FOUND: No [Customer][google.cloud.channel.v1.Customer] resource found for the name in the request.
     * </pre>
     */
    public com.google.protobuf.Empty deleteCustomer(com.google.cloud.channel.v1.DeleteCustomerRequest request) {
      return io.grpc.stub.ClientCalls.blockingUnaryCall(
          getChannel(), getDeleteCustomerMethod(), getCallOptions(), request);
    }

    /**
     * <pre>
     * Creates a Cloud Identity for the given customer using the customer's
     * information, or the information provided here.
     * Possible error codes:
     * *  PERMISSION_DENIED: The customer doesn't belong to the reseller.
     * *  INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * *  NOT_FOUND: The customer was not found.
     * *  ALREADY_EXISTS: The customer's primary email already exists. Retry
     *    after changing the customer's primary contact email.
     * * INTERNAL: Any non-user error related to a technical issue in the
     * backend. Contact Cloud Channel support.
     * * UNKNOWN: Any non-user error related to a technical issue in the backend.
     * Contact Cloud Channel support.
     * Return value:
     * The ID of a long-running operation.
     * To get the results of the operation, call the GetOperation method of
     * CloudChannelOperationsService. The Operation metadata contains an
     * instance of [OperationMetadata][google.cloud.channel.v1.OperationMetadata].
     * </pre>
     */
    public com.google.longrunning.Operation provisionCloudIdentity(com.google.cloud.channel.v1.ProvisionCloudIdentityRequest request) {
      return io.grpc.stub.ClientCalls.blockingUnaryCall(
          getChannel(), getProvisionCloudIdentityMethod(), getCallOptions(), request);
    }

    /**
     * <pre>
     * Lists [Entitlement][google.cloud.channel.v1.Entitlement]s belonging to a customer.
     * Possible error codes:
     * * PERMISSION_DENIED: The customer doesn't belong to the reseller.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * Return value:
     * A list of the customer's [Entitlement][google.cloud.channel.v1.Entitlement]s.
     * </pre>
     */
    public com.google.cloud.channel.v1.ListEntitlementsResponse listEntitlements(com.google.cloud.channel.v1.ListEntitlementsRequest request) {
      return io.grpc.stub.ClientCalls.blockingUnaryCall(
          getChannel(), getListEntitlementsMethod(), getCallOptions(), request);
    }

    /**
     * <pre>
     * List [TransferableSku][google.cloud.channel.v1.TransferableSku]s of a customer based on the Cloud Identity ID or
     * Customer Name in the request.
     * Use this method to list the entitlements information of an
     * unowned customer. You should provide the customer's
     * Cloud Identity ID or Customer Name.
     * Possible error codes:
     * * PERMISSION_DENIED:
     *     * The customer doesn't belong to the reseller and has no auth token.
     *     * The supplied auth token is invalid.
     *     * The reseller account making the request is different
     *     from the reseller account in the query.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * Return value:
     * A list of the customer's [TransferableSku][google.cloud.channel.v1.TransferableSku].
     * </pre>
     */
    public com.google.cloud.channel.v1.ListTransferableSkusResponse listTransferableSkus(com.google.cloud.channel.v1.ListTransferableSkusRequest request) {
      return io.grpc.stub.ClientCalls.blockingUnaryCall(
          getChannel(), getListTransferableSkusMethod(), getCallOptions(), request);
    }

    /**
     * <pre>
     * List [TransferableOffer][google.cloud.channel.v1.TransferableOffer]s of a customer based on Cloud Identity ID or
     * Customer Name in the request.
     * Use this method when a reseller gets the entitlement information of an
     * unowned customer. The reseller should provide the customer's
     * Cloud Identity ID or Customer Name.
     * Possible error codes:
     * * PERMISSION_DENIED:
     *     * The customer doesn't belong to the reseller and has no auth token.
     *     * The supplied auth token is invalid.
     *     * The reseller account making the request is different
     *     from the reseller account in the query.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * Return value:
     * List of [TransferableOffer][google.cloud.channel.v1.TransferableOffer] for the given customer and SKU.
     * </pre>
     */
    public com.google.cloud.channel.v1.ListTransferableOffersResponse listTransferableOffers(com.google.cloud.channel.v1.ListTransferableOffersRequest request) {
      return io.grpc.stub.ClientCalls.blockingUnaryCall(
          getChannel(), getListTransferableOffersMethod(), getCallOptions(), request);
    }

    /**
     * <pre>
     * Returns the requested [Entitlement][google.cloud.channel.v1.Entitlement] resource.
     * Possible error codes:
     * * PERMISSION_DENIED: The customer doesn't belong to the reseller.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * NOT_FOUND: The customer entitlement was not found.
     * Return value:
     * The requested [Entitlement][google.cloud.channel.v1.Entitlement] resource.
     * </pre>
     */
    public com.google.cloud.channel.v1.Entitlement getEntitlement(com.google.cloud.channel.v1.GetEntitlementRequest request) {
      return io.grpc.stub.ClientCalls.blockingUnaryCall(
          getChannel(), getGetEntitlementMethod(), getCallOptions(), request);
    }

    /**
     * <pre>
     * Creates an entitlement for a customer.
     * Possible error codes:
     * * PERMISSION_DENIED: The customer doesn't belong to the reseller.
     * * INVALID_ARGUMENT:
     *     * Required request parameters are missing or invalid.
     *     * There is already a customer entitlement for a SKU from the same
     *     product family.
     * * INVALID_VALUE: Make sure the OfferId is valid. If it is, contact
     * Google Channel support for further troubleshooting.
     * * NOT_FOUND: The customer or offer resource was not found.
     * * ALREADY_EXISTS:
     *     * The SKU was already purchased for the customer.
     *     * The customer's primary email already exists. Retry
     *     after changing the customer's primary contact email.
     * * CONDITION_NOT_MET or FAILED_PRECONDITION:
     *     * The domain required for purchasing a SKU has not been verified.
     *     * A pre-requisite SKU required to purchase an Add-On SKU is missing.
     *     For example, Google Workspace Business Starter is required to purchase
     *     Vault or Drive.
     *     * (Developer accounts only) Reseller and resold domain must meet the
     *     following naming requirements:
     *         * Domain names must start with goog-test.
     *         * Domain names must include the reseller domain.
     * * INTERNAL: Any non-user error related to a technical issue in the
     * backend. Contact Cloud Channel support.
     * * UNKNOWN: Any non-user error related to a technical issue in the backend.
     * Contact Cloud Channel support.
     * Return value:
     * The ID of a long-running operation.
     * To get the results of the operation, call the GetOperation method of
     * CloudChannelOperationsService. The Operation metadata will contain an
     * instance of [OperationMetadata][google.cloud.channel.v1.OperationMetadata].
     * </pre>
     */
    public com.google.longrunning.Operation createEntitlement(com.google.cloud.channel.v1.CreateEntitlementRequest request) {
      return io.grpc.stub.ClientCalls.blockingUnaryCall(
          getChannel(), getCreateEntitlementMethod(), getCallOptions(), request);
    }

    /**
     * <pre>
     * Change parameters of the entitlement.
     * An entitlement update is a long-running operation and it updates the
     * entitlement as a result of fulfillment.
     * Possible error codes:
     * * PERMISSION_DENIED: The customer doesn't belong to the reseller.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * For example, the number of seats being changed is greater than the allowed
     * number of max seats, or decreasing seats for a commitment based plan.
     * * NOT_FOUND: Entitlement resource not found.
     * * INTERNAL: Any non-user error related to a technical issue in the
     * backend. Contact Cloud Channel support.
     * * UNKNOWN: Any non-user error related to a technical issue in the backend.
     * Contact Cloud Channel support.
     * Return value:
     * The ID of a long-running operation.
     * To get the results of the operation, call the GetOperation method of
     * CloudChannelOperationsService. The Operation metadata will contain an
     * instance of [OperationMetadata][google.cloud.channel.v1.OperationMetadata].
     * </pre>
     */
    public com.google.longrunning.Operation changeParameters(com.google.cloud.channel.v1.ChangeParametersRequest request) {
      return io.grpc.stub.ClientCalls.blockingUnaryCall(
          getChannel(), getChangeParametersMethod(), getCallOptions(), request);
    }

    /**
     * <pre>
     * Updates the renewal settings for an existing customer entitlement.
     * An entitlement update is a long-running operation and it updates the
     * entitlement as a result of fulfillment.
     * Possible error codes:
     * * PERMISSION_DENIED: The customer doesn't belong to the reseller.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * NOT_FOUND: Entitlement resource not found.
     * * NOT_COMMITMENT_PLAN: Renewal Settings are only applicable for a
     * commitment plan. Can't enable or disable renewals for non-commitment plans.
     * * INTERNAL: Any non-user error related to a technical issue in the
     * backend. Contact Cloud Channel support.
     * * UNKNOWN: Any non-user error related to a technical issue in the backend.
     *   Contact Cloud Channel support.
     * Return value:
     * The ID of a long-running operation.
     * To get the results of the operation, call the GetOperation method of
     * CloudChannelOperationsService. The Operation metadata will contain an
     * instance of [OperationMetadata][google.cloud.channel.v1.OperationMetadata].
     * </pre>
     */
    public com.google.longrunning.Operation changeRenewalSettings(com.google.cloud.channel.v1.ChangeRenewalSettingsRequest request) {
      return io.grpc.stub.ClientCalls.blockingUnaryCall(
          getChannel(), getChangeRenewalSettingsMethod(), getCallOptions(), request);
    }

    /**
     * <pre>
     * Updates the Offer for an existing customer entitlement.
     * An entitlement update is a long-running operation and it updates the
     * entitlement as a result of fulfillment.
     * Possible error codes:
     * * PERMISSION_DENIED: The customer doesn't belong to the reseller.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * NOT_FOUND: Offer or Entitlement resource not found.
     * * INTERNAL: Any non-user error related to a technical issue in the
     * backend. Contact Cloud Channel support.
     * * UNKNOWN: Any non-user error related to a technical issue in the backend.
     * Contact Cloud Channel support.
     * Return value:
     * The ID of a long-running operation.
     * To get the results of the operation, call the GetOperation method of
     * CloudChannelOperationsService. The Operation metadata will contain an
     * instance of [OperationMetadata][google.cloud.channel.v1.OperationMetadata].
     * </pre>
     */
    public com.google.longrunning.Operation changeOffer(com.google.cloud.channel.v1.ChangeOfferRequest request) {
      return io.grpc.stub.ClientCalls.blockingUnaryCall(
          getChannel(), getChangeOfferMethod(), getCallOptions(), request);
    }

    /**
     * <pre>
     * Starts paid service for a trial entitlement.
     * Starts paid service for a trial entitlement immediately. This method is
     * only applicable if a plan is set up for a trial entitlement but has some
     * trial days remaining.
     * Possible error codes:
     * * PERMISSION_DENIED: The customer doesn't belong to the reseller.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * NOT_FOUND: Entitlement resource not found.
     * * FAILED_PRECONDITION/NOT_IN_TRIAL: This method only works for
     * entitlement on trial plans.
     * * INTERNAL: Any non-user error related to a technical issue in the
     * backend. Contact Cloud Channel support.
     * * UNKNOWN: Any non-user error related to a technical issue in the backend.
     * Contact Cloud Channel support.
     * Return value:
     * The ID of a long-running operation.
     * To get the results of the operation, call the GetOperation method of
     * CloudChannelOperationsService. The Operation metadata will contain an
     * instance of [OperationMetadata][google.cloud.channel.v1.OperationMetadata].
     * </pre>
     */
    public com.google.longrunning.Operation startPaidService(com.google.cloud.channel.v1.StartPaidServiceRequest request) {
      return io.grpc.stub.ClientCalls.blockingUnaryCall(
          getChannel(), getStartPaidServiceMethod(), getCallOptions(), request);
    }

    /**
     * <pre>
     * Suspends a previously fulfilled entitlement.
     * An entitlement suspension is a long-running operation.
     * Possible error codes:
     * * PERMISSION_DENIED: The customer doesn't belong to the reseller.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * NOT_FOUND: Entitlement resource not found.
     * * NOT_ACTIVE: Entitlement is not active.
     * * INTERNAL: Any non-user error related to a technical issue in the
     * backend. Contact Cloud Channel support.
     * * UNKNOWN: Any non-user error related to a technical issue in the backend.
     * Contact Cloud Channel support.
     * Return value:
     * The ID of a long-running operation.
     * To get the results of the operation, call the GetOperation method of
     * CloudChannelOperationsService. The Operation metadata will contain an
     * instance of [OperationMetadata][google.cloud.channel.v1.OperationMetadata].
     * </pre>
     */
    public com.google.longrunning.Operation suspendEntitlement(com.google.cloud.channel.v1.SuspendEntitlementRequest request) {
      return io.grpc.stub.ClientCalls.blockingUnaryCall(
          getChannel(), getSuspendEntitlementMethod(), getCallOptions(), request);
    }

    /**
     * <pre>
     * Cancels a previously fulfilled entitlement.
     * An entitlement cancellation is a long-running operation.
     * Possible error codes:
     * * PERMISSION_DENIED: The reseller account making the request is different
     * from the reseller account in the API request.
     * * FAILED_PRECONDITION: There are Google Cloud projects linked to the
     * Google Cloud entitlement's Cloud Billing subaccount.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * NOT_FOUND: Entitlement resource not found.
     * * DELETION_TYPE_NOT_ALLOWED: Cancel is only allowed for Google Workspace
     * add-ons, or entitlements for Google Cloud's development platform.
     * * INTERNAL: Any non-user error related to a technical issue in the
     * backend. Contact Cloud Channel support.
     * * UNKNOWN: Any non-user error related to a technical issue in the backend.
     * Contact Cloud Channel support.
     * Return value:
     * The ID of a long-running operation.
     * To get the results of the operation, call the GetOperation method of
     * CloudChannelOperationsService. The response will contain
     * google.protobuf.Empty on success. The Operation metadata will contain an
     * instance of [OperationMetadata][google.cloud.channel.v1.OperationMetadata].
     * </pre>
     */
    public com.google.longrunning.Operation cancelEntitlement(com.google.cloud.channel.v1.CancelEntitlementRequest request) {
      return io.grpc.stub.ClientCalls.blockingUnaryCall(
          getChannel(), getCancelEntitlementMethod(), getCallOptions(), request);
    }

    /**
     * <pre>
     * Activates a previously suspended entitlement. Entitlements suspended for
     * pending ToS acceptance can't be activated using this method.
     * An entitlement activation is a long-running operation and it updates
     * the state of the customer entitlement.
     * Possible error codes:
     * * PERMISSION_DENIED: The reseller account making the request is different
     * from the reseller account in the API request.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * NOT_FOUND: Entitlement resource not found.
     * * SUSPENSION_NOT_RESELLER_INITIATED: Can only activate reseller-initiated
     * suspensions and entitlements that have accepted the TOS.
     * * NOT_SUSPENDED: Can only activate suspended entitlements not in an ACTIVE
     * state.
     * * INTERNAL: Any non-user error related to a technical issue in the
     * backend. Contact Cloud Channel support.
     * * UNKNOWN: Any non-user error related to a technical issue in the backend.
     * Contact Cloud Channel support.
     * Return value:
     * The ID of a long-running operation.
     * To get the results of the operation, call the GetOperation method of
     * CloudChannelOperationsService. The Operation metadata will contain an
     * instance of [OperationMetadata][google.cloud.channel.v1.OperationMetadata].
     * </pre>
     */
    public com.google.longrunning.Operation activateEntitlement(com.google.cloud.channel.v1.ActivateEntitlementRequest request) {
      return io.grpc.stub.ClientCalls.blockingUnaryCall(
          getChannel(), getActivateEntitlementMethod(), getCallOptions(), request);
    }

    /**
     * <pre>
     * Transfers customer entitlements to new reseller.
     * Possible error codes:
     * * PERMISSION_DENIED: The customer doesn't belong to the reseller.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * NOT_FOUND: The customer or offer resource was not found.
     * * ALREADY_EXISTS: The SKU was already transferred for the customer.
     * * CONDITION_NOT_MET or FAILED_PRECONDITION:
     *     * The SKU requires domain verification to transfer, but the domain is
     *     not verified.
     *     * An Add-On SKU (example, Vault or Drive) is missing the
     *     pre-requisite SKU (example, G Suite Basic).
     *     * (Developer accounts only) Reseller and resold domain must meet the
     *     following naming requirements:
     *         * Domain names must start with goog-test.
     *         * Domain names must include the reseller domain.
     *     * Specify all transferring entitlements.
     * * INTERNAL: Any non-user error related to a technical issue in the
     * backend. Contact Cloud Channel support.
     * * UNKNOWN: Any non-user error related to a technical issue in the backend.
     * Contact Cloud Channel support.
     * Return value:
     * The ID of a long-running operation.
     * To get the results of the operation, call the GetOperation method of
     * CloudChannelOperationsService. The Operation metadata will contain an
     * instance of [OperationMetadata][google.cloud.channel.v1.OperationMetadata].
     * </pre>
     */
    public com.google.longrunning.Operation transferEntitlements(com.google.cloud.channel.v1.TransferEntitlementsRequest request) {
      return io.grpc.stub.ClientCalls.blockingUnaryCall(
          getChannel(), getTransferEntitlementsMethod(), getCallOptions(), request);
    }

    /**
     * <pre>
     * Transfers customer entitlements from their current reseller to Google.
     * Possible error codes:
     * * PERMISSION_DENIED: The customer doesn't belong to the reseller.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * NOT_FOUND: The customer or offer resource was not found.
     * * ALREADY_EXISTS: The SKU was already transferred for the customer.
     * * CONDITION_NOT_MET or FAILED_PRECONDITION:
     *     * The SKU requires domain verification to transfer, but the domain is
     *     not verified.
     *     * An Add-On SKU (example, Vault or Drive) is missing the
     *     pre-requisite SKU (example, G Suite Basic).
     *     * (Developer accounts only) Reseller and resold domain must meet the
     *     following naming requirements:
     *         * Domain names must start with goog-test.
     *         * Domain names must include the reseller domain.
     * * INTERNAL: Any non-user error related to a technical issue in the
     * backend. Contact Cloud Channel support.
     * * UNKNOWN: Any non-user error related to a technical issue in the backend.
     * Contact Cloud Channel support.
     * Return value:
     * The ID of a long-running operation.
     * To get the results of the operation, call the GetOperation method of
     * CloudChannelOperationsService. The response will contain
     * google.protobuf.Empty on success. The Operation metadata will contain an
     * instance of [OperationMetadata][google.cloud.channel.v1.OperationMetadata].
     * </pre>
     */
    public com.google.longrunning.Operation transferEntitlementsToGoogle(com.google.cloud.channel.v1.TransferEntitlementsToGoogleRequest request) {
      return io.grpc.stub.ClientCalls.blockingUnaryCall(
          getChannel(), getTransferEntitlementsToGoogleMethod(), getCallOptions(), request);
    }

    /**
     * <pre>
     * List [ChannelPartnerLink][google.cloud.channel.v1.ChannelPartnerLink]s belonging to a distributor.
     * You must be a distributor to call this method.
     * Possible error codes:
     * * PERMISSION_DENIED: The reseller account making the request is different
     * from the reseller account in the API request.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * Return value:
     * The list of the distributor account's [ChannelPartnerLink][google.cloud.channel.v1.ChannelPartnerLink] resources.
     * </pre>
     */
    public com.google.cloud.channel.v1.ListChannelPartnerLinksResponse listChannelPartnerLinks(com.google.cloud.channel.v1.ListChannelPartnerLinksRequest request) {
      return io.grpc.stub.ClientCalls.blockingUnaryCall(
          getChannel(), getListChannelPartnerLinksMethod(), getCallOptions(), request);
    }

    /**
     * <pre>
     * Returns the requested [ChannelPartnerLink][google.cloud.channel.v1.ChannelPartnerLink] resource.
     * You must be a distributor to call this method.
     * Possible error codes:
     * * PERMISSION_DENIED: The reseller account making the request is different
     * from the reseller account in the API request.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * NOT_FOUND: ChannelPartnerLink resource not found because of an
     * invalid channel partner link name.
     * Return value:
     * The [ChannelPartnerLink][google.cloud.channel.v1.ChannelPartnerLink] resource.
     * </pre>
     */
    public com.google.cloud.channel.v1.ChannelPartnerLink getChannelPartnerLink(com.google.cloud.channel.v1.GetChannelPartnerLinkRequest request) {
      return io.grpc.stub.ClientCalls.blockingUnaryCall(
          getChannel(), getGetChannelPartnerLinkMethod(), getCallOptions(), request);
    }

    /**
     * <pre>
     * Initiates a channel partner link between a distributor and a reseller, or
     * between resellers in an n-tier reseller channel.
     * Invited partners need to follow the invite_link_uri provided in the
     * response to accept. After accepting the invitation, a link is set up
     * between the two parties.
     * You must be a distributor to call this method.
     * Possible error codes:
     * * PERMISSION_DENIED: The reseller account making the request is different
     * from the reseller account in the API request.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * ALREADY_EXISTS: The ChannelPartnerLink sent in the request already
     * exists.
     * * NOT_FOUND: No Cloud Identity customer exists for provided domain.
     * * INTERNAL: Any non-user error related to a technical issue in the
     * backend. Contact Cloud Channel support.
     * * UNKNOWN: Any non-user error related to a technical issue in the backend.
     * Contact Cloud Channel support.
     * Return value:
     * The new [ChannelPartnerLink][google.cloud.channel.v1.ChannelPartnerLink] resource.
     * </pre>
     */
    public com.google.cloud.channel.v1.ChannelPartnerLink createChannelPartnerLink(com.google.cloud.channel.v1.CreateChannelPartnerLinkRequest request) {
      return io.grpc.stub.ClientCalls.blockingUnaryCall(
          getChannel(), getCreateChannelPartnerLinkMethod(), getCallOptions(), request);
    }

    /**
     * <pre>
     * Updates a channel partner link. Distributors call this method to change a
     * link's status. For example, to suspend a partner link.
     * You must be a distributor to call this method.
     * Possible error codes:
     * * PERMISSION_DENIED: The reseller account making the request is different
     * from the reseller account in the API request.
     * * INVALID_ARGUMENT:
     *     * Required request parameters are missing or invalid.
     *     * Link state cannot change from invited to active or suspended.
     *     * Cannot send reseller_cloud_identity_id, invite_url, or name in update
     *     mask.
     * * NOT_FOUND: ChannelPartnerLink resource not found.
     * * INTERNAL: Any non-user error related to a technical issue in the
     * backend. Contact Cloud Channel support.
     * * UNKNOWN: Any non-user error related to a technical issue in the backend.
     * Contact Cloud Channel support.
     * Return value:
     * The updated [ChannelPartnerLink][google.cloud.channel.v1.ChannelPartnerLink] resource.
     * </pre>
     */
    public com.google.cloud.channel.v1.ChannelPartnerLink updateChannelPartnerLink(com.google.cloud.channel.v1.UpdateChannelPartnerLinkRequest request) {
      return io.grpc.stub.ClientCalls.blockingUnaryCall(
          getChannel(), getUpdateChannelPartnerLinkMethod(), getCallOptions(), request);
    }

    /**
     * <pre>
     * Returns the requested [Offer][google.cloud.channel.v1.Offer] resource.
     * Possible error codes:
     * * PERMISSION_DENIED: The entitlement doesn't belong to the reseller.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * NOT_FOUND: Entitlement or offer was not found.
     * Return value:
     * The [Offer][google.cloud.channel.v1.Offer] resource.
     * </pre>
     */
    public com.google.cloud.channel.v1.Offer lookupOffer(com.google.cloud.channel.v1.LookupOfferRequest request) {
      return io.grpc.stub.ClientCalls.blockingUnaryCall(
          getChannel(), getLookupOfferMethod(), getCallOptions(), request);
    }

    /**
     * <pre>
     * Lists the Products the reseller is authorized to sell.
     * Possible error codes:
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * </pre>
     */
    public com.google.cloud.channel.v1.ListProductsResponse listProducts(com.google.cloud.channel.v1.ListProductsRequest request) {
      return io.grpc.stub.ClientCalls.blockingUnaryCall(
          getChannel(), getListProductsMethod(), getCallOptions(), request);
    }

    /**
     * <pre>
     * Lists the SKUs for a product the reseller is authorized to sell.
     * Possible error codes:
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * </pre>
     */
    public com.google.cloud.channel.v1.ListSkusResponse listSkus(com.google.cloud.channel.v1.ListSkusRequest request) {
      return io.grpc.stub.ClientCalls.blockingUnaryCall(
          getChannel(), getListSkusMethod(), getCallOptions(), request);
    }

    /**
     * <pre>
     * Lists the Offers the reseller can sell.
     * Possible error codes:
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * </pre>
     */
    public com.google.cloud.channel.v1.ListOffersResponse listOffers(com.google.cloud.channel.v1.ListOffersRequest request) {
      return io.grpc.stub.ClientCalls.blockingUnaryCall(
          getChannel(), getListOffersMethod(), getCallOptions(), request);
    }

    /**
     * <pre>
     * Lists the following:
     * * SKUs that you can purchase for a customer
     * * SKUs that you can upgrade or downgrade for an entitlement.
     * Possible error codes:
     * * PERMISSION_DENIED: The customer doesn't belong to the reseller.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * </pre>
     */
    public com.google.cloud.channel.v1.ListPurchasableSkusResponse listPurchasableSkus(com.google.cloud.channel.v1.ListPurchasableSkusRequest request) {
      return io.grpc.stub.ClientCalls.blockingUnaryCall(
          getChannel(), getListPurchasableSkusMethod(), getCallOptions(), request);
    }

    /**
     * <pre>
     * Lists the following:
     * * Offers that you can purchase for a customer.
     * * Offers that you can change for an entitlement.
     * Possible error codes:
     * * PERMISSION_DENIED: The customer doesn't belong to the reseller
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * </pre>
     */
    public com.google.cloud.channel.v1.ListPurchasableOffersResponse listPurchasableOffers(com.google.cloud.channel.v1.ListPurchasableOffersRequest request) {
      return io.grpc.stub.ClientCalls.blockingUnaryCall(
          getChannel(), getListPurchasableOffersMethod(), getCallOptions(), request);
    }

    /**
     * <pre>
     * Registers a service account with subscriber privileges on the Cloud Pub/Sub
     * topic for this Channel Services account. After you create a
     * subscriber, you get the events through [SubscriberEvent][google.cloud.channel.v1.SubscriberEvent]
     * Possible error codes:
     * * PERMISSION_DENIED: The reseller account making the request and the
     * provided reseller account are different, or the impersonated user
     * is not a super admin.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * INTERNAL: Any non-user error related to a technical issue in the
     * backend. Contact Cloud Channel support.
     * * UNKNOWN: Any non-user error related to a technical issue in the backend.
     * Contact Cloud Channel support.
     * Return value:
     * The topic name with the registered service email address.
     * </pre>
     */
    public com.google.cloud.channel.v1.RegisterSubscriberResponse registerSubscriber(com.google.cloud.channel.v1.RegisterSubscriberRequest request) {
      return io.grpc.stub.ClientCalls.blockingUnaryCall(
          getChannel(), getRegisterSubscriberMethod(), getCallOptions(), request);
    }

    /**
     * <pre>
     * Unregisters a service account with subscriber privileges on the Cloud
     * Pub/Sub topic created for this Channel Services account. If there are no
     * service accounts left with subscriber privileges, this deletes the topic.
     * You can call ListSubscribers to check for these accounts.
     * Possible error codes:
     * * PERMISSION_DENIED: The reseller account making the request and the
     * provided reseller account are different, or the impersonated user
     * is not a super admin.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * NOT_FOUND: The topic resource doesn't exist.
     * * INTERNAL: Any non-user error related to a technical issue in the
     * backend. Contact Cloud Channel support.
     * * UNKNOWN: Any non-user error related to a technical issue in the backend.
     * Contact Cloud Channel support.
     * Return value:
     * The topic name that unregistered the service email address.
     * Returns a success response if the service email address wasn't registered
     * with the topic.
     * </pre>
     */
    public com.google.cloud.channel.v1.UnregisterSubscriberResponse unregisterSubscriber(com.google.cloud.channel.v1.UnregisterSubscriberRequest request) {
      return io.grpc.stub.ClientCalls.blockingUnaryCall(
          getChannel(), getUnregisterSubscriberMethod(), getCallOptions(), request);
    }

    /**
     * <pre>
     * Lists service accounts with subscriber privileges on the Cloud Pub/Sub
     * topic created for this Channel Services account.
     * Possible error codes:
     * * PERMISSION_DENIED: The reseller account making the request and the
     * provided reseller account are different, or the impersonated user
     * is not a super admin.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * NOT_FOUND: The topic resource doesn't exist.
     * * INTERNAL: Any non-user error related to a technical issue in the
     * backend. Contact Cloud Channel support.
     * * UNKNOWN: Any non-user error related to a technical issue in the backend.
     * Contact Cloud Channel support.
     * Return value:
     * A list of service email addresses.
     * </pre>
     */
    public com.google.cloud.channel.v1.ListSubscribersResponse listSubscribers(com.google.cloud.channel.v1.ListSubscribersRequest request) {
      return io.grpc.stub.ClientCalls.blockingUnaryCall(
          getChannel(), getListSubscribersMethod(), getCallOptions(), request);
    }
  }

  /**
   * <pre>
   * CloudChannelService lets Google cloud resellers and distributors manage
   * their customers, channel partners, entitlements, and reports.
   * Using this service:
   * 1. Resellers and distributors can manage a customer entity.
   * 2. Distributors can register an authorized reseller in their channel and
   *    provide them with delegated admin access.
   * 3. Resellers and distributors can manage customer entitlements.
   * CloudChannelService exposes the following resources:
   * - [Customer][google.cloud.channel.v1.Customer]s: An entity—usually an enterprise—managed by a reseller or
   * distributor.
   * - [Entitlement][google.cloud.channel.v1.Entitlement]s: An entity that provides a customer with the means to use
   * a service. Entitlements are created or updated as a result of a successful
   * fulfillment.
   * - [ChannelPartnerLink][google.cloud.channel.v1.ChannelPartnerLink]s: An entity that identifies links between
   * distributors and their indirect resellers in a channel.
   * </pre>
   */
  public static final class CloudChannelServiceFutureStub extends io.grpc.stub.AbstractFutureStub<CloudChannelServiceFutureStub> {
    private CloudChannelServiceFutureStub(
        io.grpc.Channel channel, io.grpc.CallOptions callOptions) {
      super(channel, callOptions);
    }

    @java.lang.Override
    protected CloudChannelServiceFutureStub build(
        io.grpc.Channel channel, io.grpc.CallOptions callOptions) {
      return new CloudChannelServiceFutureStub(channel, callOptions);
    }

    /**
     * <pre>
     * List [Customer][google.cloud.channel.v1.Customer]s.
     * Possible error codes:
     * * PERMISSION_DENIED: The reseller account making the request is different
     * from the reseller account in the API request.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * Return value:
     * List of [Customer][google.cloud.channel.v1.Customer]s, or an empty list if there are no customers.
     * </pre>
     */
    public com.google.common.util.concurrent.ListenableFuture<com.google.cloud.channel.v1.ListCustomersResponse> listCustomers(
        com.google.cloud.channel.v1.ListCustomersRequest request) {
      return io.grpc.stub.ClientCalls.futureUnaryCall(
          getChannel().newCall(getListCustomersMethod(), getCallOptions()), request);
    }

    /**
     * <pre>
     * Returns the requested [Customer][google.cloud.channel.v1.Customer] resource.
     * Possible error codes:
     * * PERMISSION_DENIED: The reseller account making the request is different
     * from the reseller account in the API request.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * NOT_FOUND: The customer resource doesn't exist. Usually the result of an
     * invalid name parameter.
     * Return value:
     * The [Customer][google.cloud.channel.v1.Customer] resource.
     * </pre>
     */
    public com.google.common.util.concurrent.ListenableFuture<com.google.cloud.channel.v1.Customer> getCustomer(
        com.google.cloud.channel.v1.GetCustomerRequest request) {
      return io.grpc.stub.ClientCalls.futureUnaryCall(
          getChannel().newCall(getGetCustomerMethod(), getCallOptions()), request);
    }

    /**
     * <pre>
     * Confirms the existence of Cloud Identity accounts based on the domain and
     * if the Cloud Identity accounts are owned by the reseller.
     * Possible error codes:
     * * PERMISSION_DENIED: The reseller account making the request is different
     * from the reseller account in the API request.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * INVALID_VALUE: Invalid domain value in the request.
     * Return value:
     * A list of [CloudIdentityCustomerAccount][google.cloud.channel.v1.CloudIdentityCustomerAccount] resources for the domain (may be
     * empty)
     * Note: in the v1alpha1 version of the API, a NOT_FOUND error returns if
     * no [CloudIdentityCustomerAccount][google.cloud.channel.v1.CloudIdentityCustomerAccount] resources match the domain.
     * </pre>
     */
    public com.google.common.util.concurrent.ListenableFuture<com.google.cloud.channel.v1.CheckCloudIdentityAccountsExistResponse> checkCloudIdentityAccountsExist(
        com.google.cloud.channel.v1.CheckCloudIdentityAccountsExistRequest request) {
      return io.grpc.stub.ClientCalls.futureUnaryCall(
          getChannel().newCall(getCheckCloudIdentityAccountsExistMethod(), getCallOptions()), request);
    }

    /**
     * <pre>
     * Creates a new [Customer][google.cloud.channel.v1.Customer] resource under the reseller or distributor
     * account.
     * Possible error codes:
     * * PERMISSION_DENIED: The reseller account making the request is different
     * from the reseller account in the API request.
     * * INVALID_ARGUMENT:
     *     * Required request parameters are missing or invalid.
     *     * Domain field value doesn't match the primary email domain.
     * Return value:
     * The newly created [Customer][google.cloud.channel.v1.Customer] resource.
     * </pre>
     */
    public com.google.common.util.concurrent.ListenableFuture<com.google.cloud.channel.v1.Customer> createCustomer(
        com.google.cloud.channel.v1.CreateCustomerRequest request) {
      return io.grpc.stub.ClientCalls.futureUnaryCall(
          getChannel().newCall(getCreateCustomerMethod(), getCallOptions()), request);
    }

    /**
     * <pre>
     * Updates an existing [Customer][google.cloud.channel.v1.Customer] resource for the reseller or
     * distributor.
     * Possible error codes:
     * * PERMISSION_DENIED: The reseller account making the request is different
     * from the reseller account in the API request.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * NOT_FOUND: No [Customer][google.cloud.channel.v1.Customer] resource found for the name in the request.
     * Return value:
     * The updated [Customer][google.cloud.channel.v1.Customer] resource.
     * </pre>
     */
    public com.google.common.util.concurrent.ListenableFuture<com.google.cloud.channel.v1.Customer> updateCustomer(
        com.google.cloud.channel.v1.UpdateCustomerRequest request) {
      return io.grpc.stub.ClientCalls.futureUnaryCall(
          getChannel().newCall(getUpdateCustomerMethod(), getCallOptions()), request);
    }

    /**
     * <pre>
     * Deletes the given [Customer][google.cloud.channel.v1.Customer] permanently.
     * Possible error codes:
     * * PERMISSION_DENIED: The account making the request does not own
     * this customer.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * FAILED_PRECONDITION: The customer has existing entitlements.
     * * NOT_FOUND: No [Customer][google.cloud.channel.v1.Customer] resource found for the name in the request.
     * </pre>
     */
    public com.google.common.util.concurrent.ListenableFuture<com.google.protobuf.Empty> deleteCustomer(
        com.google.cloud.channel.v1.DeleteCustomerRequest request) {
      return io.grpc.stub.ClientCalls.futureUnaryCall(
          getChannel().newCall(getDeleteCustomerMethod(), getCallOptions()), request);
    }

    /**
     * <pre>
     * Creates a Cloud Identity for the given customer using the customer's
     * information, or the information provided here.
     * Possible error codes:
     * *  PERMISSION_DENIED: The customer doesn't belong to the reseller.
     * *  INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * *  NOT_FOUND: The customer was not found.
     * *  ALREADY_EXISTS: The customer's primary email already exists. Retry
     *    after changing the customer's primary contact email.
     * * INTERNAL: Any non-user error related to a technical issue in the
     * backend. Contact Cloud Channel support.
     * * UNKNOWN: Any non-user error related to a technical issue in the backend.
     * Contact Cloud Channel support.
     * Return value:
     * The ID of a long-running operation.
     * To get the results of the operation, call the GetOperation method of
     * CloudChannelOperationsService. The Operation metadata contains an
     * instance of [OperationMetadata][google.cloud.channel.v1.OperationMetadata].
     * </pre>
     */
    public com.google.common.util.concurrent.ListenableFuture<com.google.longrunning.Operation> provisionCloudIdentity(
        com.google.cloud.channel.v1.ProvisionCloudIdentityRequest request) {
      return io.grpc.stub.ClientCalls.futureUnaryCall(
          getChannel().newCall(getProvisionCloudIdentityMethod(), getCallOptions()), request);
    }

    /**
     * <pre>
     * Lists [Entitlement][google.cloud.channel.v1.Entitlement]s belonging to a customer.
     * Possible error codes:
     * * PERMISSION_DENIED: The customer doesn't belong to the reseller.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * Return value:
     * A list of the customer's [Entitlement][google.cloud.channel.v1.Entitlement]s.
     * </pre>
     */
    public com.google.common.util.concurrent.ListenableFuture<com.google.cloud.channel.v1.ListEntitlementsResponse> listEntitlements(
        com.google.cloud.channel.v1.ListEntitlementsRequest request) {
      return io.grpc.stub.ClientCalls.futureUnaryCall(
          getChannel().newCall(getListEntitlementsMethod(), getCallOptions()), request);
    }

    /**
     * <pre>
     * List [TransferableSku][google.cloud.channel.v1.TransferableSku]s of a customer based on the Cloud Identity ID or
     * Customer Name in the request.
     * Use this method to list the entitlements information of an
     * unowned customer. You should provide the customer's
     * Cloud Identity ID or Customer Name.
     * Possible error codes:
     * * PERMISSION_DENIED:
     *     * The customer doesn't belong to the reseller and has no auth token.
     *     * The supplied auth token is invalid.
     *     * The reseller account making the request is different
     *     from the reseller account in the query.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * Return value:
     * A list of the customer's [TransferableSku][google.cloud.channel.v1.TransferableSku].
     * </pre>
     */
    public com.google.common.util.concurrent.ListenableFuture<com.google.cloud.channel.v1.ListTransferableSkusResponse> listTransferableSkus(
        com.google.cloud.channel.v1.ListTransferableSkusRequest request) {
      return io.grpc.stub.ClientCalls.futureUnaryCall(
          getChannel().newCall(getListTransferableSkusMethod(), getCallOptions()), request);
    }

    /**
     * <pre>
     * List [TransferableOffer][google.cloud.channel.v1.TransferableOffer]s of a customer based on Cloud Identity ID or
     * Customer Name in the request.
     * Use this method when a reseller gets the entitlement information of an
     * unowned customer. The reseller should provide the customer's
     * Cloud Identity ID or Customer Name.
     * Possible error codes:
     * * PERMISSION_DENIED:
     *     * The customer doesn't belong to the reseller and has no auth token.
     *     * The supplied auth token is invalid.
     *     * The reseller account making the request is different
     *     from the reseller account in the query.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * Return value:
     * List of [TransferableOffer][google.cloud.channel.v1.TransferableOffer] for the given customer and SKU.
     * </pre>
     */
    public com.google.common.util.concurrent.ListenableFuture<com.google.cloud.channel.v1.ListTransferableOffersResponse> listTransferableOffers(
        com.google.cloud.channel.v1.ListTransferableOffersRequest request) {
      return io.grpc.stub.ClientCalls.futureUnaryCall(
          getChannel().newCall(getListTransferableOffersMethod(), getCallOptions()), request);
    }

    /**
     * <pre>
     * Returns the requested [Entitlement][google.cloud.channel.v1.Entitlement] resource.
     * Possible error codes:
     * * PERMISSION_DENIED: The customer doesn't belong to the reseller.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * NOT_FOUND: The customer entitlement was not found.
     * Return value:
     * The requested [Entitlement][google.cloud.channel.v1.Entitlement] resource.
     * </pre>
     */
    public com.google.common.util.concurrent.ListenableFuture<com.google.cloud.channel.v1.Entitlement> getEntitlement(
        com.google.cloud.channel.v1.GetEntitlementRequest request) {
      return io.grpc.stub.ClientCalls.futureUnaryCall(
          getChannel().newCall(getGetEntitlementMethod(), getCallOptions()), request);
    }

    /**
     * <pre>
     * Creates an entitlement for a customer.
     * Possible error codes:
     * * PERMISSION_DENIED: The customer doesn't belong to the reseller.
     * * INVALID_ARGUMENT:
     *     * Required request parameters are missing or invalid.
     *     * There is already a customer entitlement for a SKU from the same
     *     product family.
     * * INVALID_VALUE: Make sure the OfferId is valid. If it is, contact
     * Google Channel support for further troubleshooting.
     * * NOT_FOUND: The customer or offer resource was not found.
     * * ALREADY_EXISTS:
     *     * The SKU was already purchased for the customer.
     *     * The customer's primary email already exists. Retry
     *     after changing the customer's primary contact email.
     * * CONDITION_NOT_MET or FAILED_PRECONDITION:
     *     * The domain required for purchasing a SKU has not been verified.
     *     * A pre-requisite SKU required to purchase an Add-On SKU is missing.
     *     For example, Google Workspace Business Starter is required to purchase
     *     Vault or Drive.
     *     * (Developer accounts only) Reseller and resold domain must meet the
     *     following naming requirements:
     *         * Domain names must start with goog-test.
     *         * Domain names must include the reseller domain.
     * * INTERNAL: Any non-user error related to a technical issue in the
     * backend. Contact Cloud Channel support.
     * * UNKNOWN: Any non-user error related to a technical issue in the backend.
     * Contact Cloud Channel support.
     * Return value:
     * The ID of a long-running operation.
     * To get the results of the operation, call the GetOperation method of
     * CloudChannelOperationsService. The Operation metadata will contain an
     * instance of [OperationMetadata][google.cloud.channel.v1.OperationMetadata].
     * </pre>
     */
    public com.google.common.util.concurrent.ListenableFuture<com.google.longrunning.Operation> createEntitlement(
        com.google.cloud.channel.v1.CreateEntitlementRequest request) {
      return io.grpc.stub.ClientCalls.futureUnaryCall(
          getChannel().newCall(getCreateEntitlementMethod(), getCallOptions()), request);
    }

    /**
     * <pre>
     * Change parameters of the entitlement.
     * An entitlement update is a long-running operation and it updates the
     * entitlement as a result of fulfillment.
     * Possible error codes:
     * * PERMISSION_DENIED: The customer doesn't belong to the reseller.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * For example, the number of seats being changed is greater than the allowed
     * number of max seats, or decreasing seats for a commitment based plan.
     * * NOT_FOUND: Entitlement resource not found.
     * * INTERNAL: Any non-user error related to a technical issue in the
     * backend. Contact Cloud Channel support.
     * * UNKNOWN: Any non-user error related to a technical issue in the backend.
     * Contact Cloud Channel support.
     * Return value:
     * The ID of a long-running operation.
     * To get the results of the operation, call the GetOperation method of
     * CloudChannelOperationsService. The Operation metadata will contain an
     * instance of [OperationMetadata][google.cloud.channel.v1.OperationMetadata].
     * </pre>
     */
    public com.google.common.util.concurrent.ListenableFuture<com.google.longrunning.Operation> changeParameters(
        com.google.cloud.channel.v1.ChangeParametersRequest request) {
      return io.grpc.stub.ClientCalls.futureUnaryCall(
          getChannel().newCall(getChangeParametersMethod(), getCallOptions()), request);
    }

    /**
     * <pre>
     * Updates the renewal settings for an existing customer entitlement.
     * An entitlement update is a long-running operation and it updates the
     * entitlement as a result of fulfillment.
     * Possible error codes:
     * * PERMISSION_DENIED: The customer doesn't belong to the reseller.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * NOT_FOUND: Entitlement resource not found.
     * * NOT_COMMITMENT_PLAN: Renewal Settings are only applicable for a
     * commitment plan. Can't enable or disable renewals for non-commitment plans.
     * * INTERNAL: Any non-user error related to a technical issue in the
     * backend. Contact Cloud Channel support.
     * * UNKNOWN: Any non-user error related to a technical issue in the backend.
     *   Contact Cloud Channel support.
     * Return value:
     * The ID of a long-running operation.
     * To get the results of the operation, call the GetOperation method of
     * CloudChannelOperationsService. The Operation metadata will contain an
     * instance of [OperationMetadata][google.cloud.channel.v1.OperationMetadata].
     * </pre>
     */
    public com.google.common.util.concurrent.ListenableFuture<com.google.longrunning.Operation> changeRenewalSettings(
        com.google.cloud.channel.v1.ChangeRenewalSettingsRequest request) {
      return io.grpc.stub.ClientCalls.futureUnaryCall(
          getChannel().newCall(getChangeRenewalSettingsMethod(), getCallOptions()), request);
    }

    /**
     * <pre>
     * Updates the Offer for an existing customer entitlement.
     * An entitlement update is a long-running operation and it updates the
     * entitlement as a result of fulfillment.
     * Possible error codes:
     * * PERMISSION_DENIED: The customer doesn't belong to the reseller.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * NOT_FOUND: Offer or Entitlement resource not found.
     * * INTERNAL: Any non-user error related to a technical issue in the
     * backend. Contact Cloud Channel support.
     * * UNKNOWN: Any non-user error related to a technical issue in the backend.
     * Contact Cloud Channel support.
     * Return value:
     * The ID of a long-running operation.
     * To get the results of the operation, call the GetOperation method of
     * CloudChannelOperationsService. The Operation metadata will contain an
     * instance of [OperationMetadata][google.cloud.channel.v1.OperationMetadata].
     * </pre>
     */
    public com.google.common.util.concurrent.ListenableFuture<com.google.longrunning.Operation> changeOffer(
        com.google.cloud.channel.v1.ChangeOfferRequest request) {
      return io.grpc.stub.ClientCalls.futureUnaryCall(
          getChannel().newCall(getChangeOfferMethod(), getCallOptions()), request);
    }

    /**
     * <pre>
     * Starts paid service for a trial entitlement.
     * Starts paid service for a trial entitlement immediately. This method is
     * only applicable if a plan is set up for a trial entitlement but has some
     * trial days remaining.
     * Possible error codes:
     * * PERMISSION_DENIED: The customer doesn't belong to the reseller.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * NOT_FOUND: Entitlement resource not found.
     * * FAILED_PRECONDITION/NOT_IN_TRIAL: This method only works for
     * entitlement on trial plans.
     * * INTERNAL: Any non-user error related to a technical issue in the
     * backend. Contact Cloud Channel support.
     * * UNKNOWN: Any non-user error related to a technical issue in the backend.
     * Contact Cloud Channel support.
     * Return value:
     * The ID of a long-running operation.
     * To get the results of the operation, call the GetOperation method of
     * CloudChannelOperationsService. The Operation metadata will contain an
     * instance of [OperationMetadata][google.cloud.channel.v1.OperationMetadata].
     * </pre>
     */
    public com.google.common.util.concurrent.ListenableFuture<com.google.longrunning.Operation> startPaidService(
        com.google.cloud.channel.v1.StartPaidServiceRequest request) {
      return io.grpc.stub.ClientCalls.futureUnaryCall(
          getChannel().newCall(getStartPaidServiceMethod(), getCallOptions()), request);
    }

    /**
     * <pre>
     * Suspends a previously fulfilled entitlement.
     * An entitlement suspension is a long-running operation.
     * Possible error codes:
     * * PERMISSION_DENIED: The customer doesn't belong to the reseller.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * NOT_FOUND: Entitlement resource not found.
     * * NOT_ACTIVE: Entitlement is not active.
     * * INTERNAL: Any non-user error related to a technical issue in the
     * backend. Contact Cloud Channel support.
     * * UNKNOWN: Any non-user error related to a technical issue in the backend.
     * Contact Cloud Channel support.
     * Return value:
     * The ID of a long-running operation.
     * To get the results of the operation, call the GetOperation method of
     * CloudChannelOperationsService. The Operation metadata will contain an
     * instance of [OperationMetadata][google.cloud.channel.v1.OperationMetadata].
     * </pre>
     */
    public com.google.common.util.concurrent.ListenableFuture<com.google.longrunning.Operation> suspendEntitlement(
        com.google.cloud.channel.v1.SuspendEntitlementRequest request) {
      return io.grpc.stub.ClientCalls.futureUnaryCall(
          getChannel().newCall(getSuspendEntitlementMethod(), getCallOptions()), request);
    }

    /**
     * <pre>
     * Cancels a previously fulfilled entitlement.
     * An entitlement cancellation is a long-running operation.
     * Possible error codes:
     * * PERMISSION_DENIED: The reseller account making the request is different
     * from the reseller account in the API request.
     * * FAILED_PRECONDITION: There are Google Cloud projects linked to the
     * Google Cloud entitlement's Cloud Billing subaccount.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * NOT_FOUND: Entitlement resource not found.
     * * DELETION_TYPE_NOT_ALLOWED: Cancel is only allowed for Google Workspace
     * add-ons, or entitlements for Google Cloud's development platform.
     * * INTERNAL: Any non-user error related to a technical issue in the
     * backend. Contact Cloud Channel support.
     * * UNKNOWN: Any non-user error related to a technical issue in the backend.
     * Contact Cloud Channel support.
     * Return value:
     * The ID of a long-running operation.
     * To get the results of the operation, call the GetOperation method of
     * CloudChannelOperationsService. The response will contain
     * google.protobuf.Empty on success. The Operation metadata will contain an
     * instance of [OperationMetadata][google.cloud.channel.v1.OperationMetadata].
     * </pre>
     */
    public com.google.common.util.concurrent.ListenableFuture<com.google.longrunning.Operation> cancelEntitlement(
        com.google.cloud.channel.v1.CancelEntitlementRequest request) {
      return io.grpc.stub.ClientCalls.futureUnaryCall(
          getChannel().newCall(getCancelEntitlementMethod(), getCallOptions()), request);
    }

    /**
     * <pre>
     * Activates a previously suspended entitlement. Entitlements suspended for
     * pending ToS acceptance can't be activated using this method.
     * An entitlement activation is a long-running operation and it updates
     * the state of the customer entitlement.
     * Possible error codes:
     * * PERMISSION_DENIED: The reseller account making the request is different
     * from the reseller account in the API request.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * NOT_FOUND: Entitlement resource not found.
     * * SUSPENSION_NOT_RESELLER_INITIATED: Can only activate reseller-initiated
     * suspensions and entitlements that have accepted the TOS.
     * * NOT_SUSPENDED: Can only activate suspended entitlements not in an ACTIVE
     * state.
     * * INTERNAL: Any non-user error related to a technical issue in the
     * backend. Contact Cloud Channel support.
     * * UNKNOWN: Any non-user error related to a technical issue in the backend.
     * Contact Cloud Channel support.
     * Return value:
     * The ID of a long-running operation.
     * To get the results of the operation, call the GetOperation method of
     * CloudChannelOperationsService. The Operation metadata will contain an
     * instance of [OperationMetadata][google.cloud.channel.v1.OperationMetadata].
     * </pre>
     */
    public com.google.common.util.concurrent.ListenableFuture<com.google.longrunning.Operation> activateEntitlement(
        com.google.cloud.channel.v1.ActivateEntitlementRequest request) {
      return io.grpc.stub.ClientCalls.futureUnaryCall(
          getChannel().newCall(getActivateEntitlementMethod(), getCallOptions()), request);
    }

    /**
     * <pre>
     * Transfers customer entitlements to new reseller.
     * Possible error codes:
     * * PERMISSION_DENIED: The customer doesn't belong to the reseller.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * NOT_FOUND: The customer or offer resource was not found.
     * * ALREADY_EXISTS: The SKU was already transferred for the customer.
     * * CONDITION_NOT_MET or FAILED_PRECONDITION:
     *     * The SKU requires domain verification to transfer, but the domain is
     *     not verified.
     *     * An Add-On SKU (example, Vault or Drive) is missing the
     *     pre-requisite SKU (example, G Suite Basic).
     *     * (Developer accounts only) Reseller and resold domain must meet the
     *     following naming requirements:
     *         * Domain names must start with goog-test.
     *         * Domain names must include the reseller domain.
     *     * Specify all transferring entitlements.
     * * INTERNAL: Any non-user error related to a technical issue in the
     * backend. Contact Cloud Channel support.
     * * UNKNOWN: Any non-user error related to a technical issue in the backend.
     * Contact Cloud Channel support.
     * Return value:
     * The ID of a long-running operation.
     * To get the results of the operation, call the GetOperation method of
     * CloudChannelOperationsService. The Operation metadata will contain an
     * instance of [OperationMetadata][google.cloud.channel.v1.OperationMetadata].
     * </pre>
     */
    public com.google.common.util.concurrent.ListenableFuture<com.google.longrunning.Operation> transferEntitlements(
        com.google.cloud.channel.v1.TransferEntitlementsRequest request) {
      return io.grpc.stub.ClientCalls.futureUnaryCall(
          getChannel().newCall(getTransferEntitlementsMethod(), getCallOptions()), request);
    }

    /**
     * <pre>
     * Transfers customer entitlements from their current reseller to Google.
     * Possible error codes:
     * * PERMISSION_DENIED: The customer doesn't belong to the reseller.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * NOT_FOUND: The customer or offer resource was not found.
     * * ALREADY_EXISTS: The SKU was already transferred for the customer.
     * * CONDITION_NOT_MET or FAILED_PRECONDITION:
     *     * The SKU requires domain verification to transfer, but the domain is
     *     not verified.
     *     * An Add-On SKU (example, Vault or Drive) is missing the
     *     pre-requisite SKU (example, G Suite Basic).
     *     * (Developer accounts only) Reseller and resold domain must meet the
     *     following naming requirements:
     *         * Domain names must start with goog-test.
     *         * Domain names must include the reseller domain.
     * * INTERNAL: Any non-user error related to a technical issue in the
     * backend. Contact Cloud Channel support.
     * * UNKNOWN: Any non-user error related to a technical issue in the backend.
     * Contact Cloud Channel support.
     * Return value:
     * The ID of a long-running operation.
     * To get the results of the operation, call the GetOperation method of
     * CloudChannelOperationsService. The response will contain
     * google.protobuf.Empty on success. The Operation metadata will contain an
     * instance of [OperationMetadata][google.cloud.channel.v1.OperationMetadata].
     * </pre>
     */
    public com.google.common.util.concurrent.ListenableFuture<com.google.longrunning.Operation> transferEntitlementsToGoogle(
        com.google.cloud.channel.v1.TransferEntitlementsToGoogleRequest request) {
      return io.grpc.stub.ClientCalls.futureUnaryCall(
          getChannel().newCall(getTransferEntitlementsToGoogleMethod(), getCallOptions()), request);
    }

    /**
     * <pre>
     * List [ChannelPartnerLink][google.cloud.channel.v1.ChannelPartnerLink]s belonging to a distributor.
     * You must be a distributor to call this method.
     * Possible error codes:
     * * PERMISSION_DENIED: The reseller account making the request is different
     * from the reseller account in the API request.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * Return value:
     * The list of the distributor account's [ChannelPartnerLink][google.cloud.channel.v1.ChannelPartnerLink] resources.
     * </pre>
     */
    public com.google.common.util.concurrent.ListenableFuture<com.google.cloud.channel.v1.ListChannelPartnerLinksResponse> listChannelPartnerLinks(
        com.google.cloud.channel.v1.ListChannelPartnerLinksRequest request) {
      return io.grpc.stub.ClientCalls.futureUnaryCall(
          getChannel().newCall(getListChannelPartnerLinksMethod(), getCallOptions()), request);
    }

    /**
     * <pre>
     * Returns the requested [ChannelPartnerLink][google.cloud.channel.v1.ChannelPartnerLink] resource.
     * You must be a distributor to call this method.
     * Possible error codes:
     * * PERMISSION_DENIED: The reseller account making the request is different
     * from the reseller account in the API request.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * NOT_FOUND: ChannelPartnerLink resource not found because of an
     * invalid channel partner link name.
     * Return value:
     * The [ChannelPartnerLink][google.cloud.channel.v1.ChannelPartnerLink] resource.
     * </pre>
     */
    public com.google.common.util.concurrent.ListenableFuture<com.google.cloud.channel.v1.ChannelPartnerLink> getChannelPartnerLink(
        com.google.cloud.channel.v1.GetChannelPartnerLinkRequest request) {
      return io.grpc.stub.ClientCalls.futureUnaryCall(
          getChannel().newCall(getGetChannelPartnerLinkMethod(), getCallOptions()), request);
    }

    /**
     * <pre>
     * Initiates a channel partner link between a distributor and a reseller, or
     * between resellers in an n-tier reseller channel.
     * Invited partners need to follow the invite_link_uri provided in the
     * response to accept. After accepting the invitation, a link is set up
     * between the two parties.
     * You must be a distributor to call this method.
     * Possible error codes:
     * * PERMISSION_DENIED: The reseller account making the request is different
     * from the reseller account in the API request.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * ALREADY_EXISTS: The ChannelPartnerLink sent in the request already
     * exists.
     * * NOT_FOUND: No Cloud Identity customer exists for provided domain.
     * * INTERNAL: Any non-user error related to a technical issue in the
     * backend. Contact Cloud Channel support.
     * * UNKNOWN: Any non-user error related to a technical issue in the backend.
     * Contact Cloud Channel support.
     * Return value:
     * The new [ChannelPartnerLink][google.cloud.channel.v1.ChannelPartnerLink] resource.
     * </pre>
     */
    public com.google.common.util.concurrent.ListenableFuture<com.google.cloud.channel.v1.ChannelPartnerLink> createChannelPartnerLink(
        com.google.cloud.channel.v1.CreateChannelPartnerLinkRequest request) {
      return io.grpc.stub.ClientCalls.futureUnaryCall(
          getChannel().newCall(getCreateChannelPartnerLinkMethod(), getCallOptions()), request);
    }

    /**
     * <pre>
     * Updates a channel partner link. Distributors call this method to change a
     * link's status. For example, to suspend a partner link.
     * You must be a distributor to call this method.
     * Possible error codes:
     * * PERMISSION_DENIED: The reseller account making the request is different
     * from the reseller account in the API request.
     * * INVALID_ARGUMENT:
     *     * Required request parameters are missing or invalid.
     *     * Link state cannot change from invited to active or suspended.
     *     * Cannot send reseller_cloud_identity_id, invite_url, or name in update
     *     mask.
     * * NOT_FOUND: ChannelPartnerLink resource not found.
     * * INTERNAL: Any non-user error related to a technical issue in the
     * backend. Contact Cloud Channel support.
     * * UNKNOWN: Any non-user error related to a technical issue in the backend.
     * Contact Cloud Channel support.
     * Return value:
     * The updated [ChannelPartnerLink][google.cloud.channel.v1.ChannelPartnerLink] resource.
     * </pre>
     */
    public com.google.common.util.concurrent.ListenableFuture<com.google.cloud.channel.v1.ChannelPartnerLink> updateChannelPartnerLink(
        com.google.cloud.channel.v1.UpdateChannelPartnerLinkRequest request) {
      return io.grpc.stub.ClientCalls.futureUnaryCall(
          getChannel().newCall(getUpdateChannelPartnerLinkMethod(), getCallOptions()), request);
    }

    /**
     * <pre>
     * Returns the requested [Offer][google.cloud.channel.v1.Offer] resource.
     * Possible error codes:
     * * PERMISSION_DENIED: The entitlement doesn't belong to the reseller.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * NOT_FOUND: Entitlement or offer was not found.
     * Return value:
     * The [Offer][google.cloud.channel.v1.Offer] resource.
     * </pre>
     */
    public com.google.common.util.concurrent.ListenableFuture<com.google.cloud.channel.v1.Offer> lookupOffer(
        com.google.cloud.channel.v1.LookupOfferRequest request) {
      return io.grpc.stub.ClientCalls.futureUnaryCall(
          getChannel().newCall(getLookupOfferMethod(), getCallOptions()), request);
    }

    /**
     * <pre>
     * Lists the Products the reseller is authorized to sell.
     * Possible error codes:
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * </pre>
     */
    public com.google.common.util.concurrent.ListenableFuture<com.google.cloud.channel.v1.ListProductsResponse> listProducts(
        com.google.cloud.channel.v1.ListProductsRequest request) {
      return io.grpc.stub.ClientCalls.futureUnaryCall(
          getChannel().newCall(getListProductsMethod(), getCallOptions()), request);
    }

    /**
     * <pre>
     * Lists the SKUs for a product the reseller is authorized to sell.
     * Possible error codes:
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * </pre>
     */
    public com.google.common.util.concurrent.ListenableFuture<com.google.cloud.channel.v1.ListSkusResponse> listSkus(
        com.google.cloud.channel.v1.ListSkusRequest request) {
      return io.grpc.stub.ClientCalls.futureUnaryCall(
          getChannel().newCall(getListSkusMethod(), getCallOptions()), request);
    }

    /**
     * <pre>
     * Lists the Offers the reseller can sell.
     * Possible error codes:
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * </pre>
     */
    public com.google.common.util.concurrent.ListenableFuture<com.google.cloud.channel.v1.ListOffersResponse> listOffers(
        com.google.cloud.channel.v1.ListOffersRequest request) {
      return io.grpc.stub.ClientCalls.futureUnaryCall(
          getChannel().newCall(getListOffersMethod(), getCallOptions()), request);
    }

    /**
     * <pre>
     * Lists the following:
     * * SKUs that you can purchase for a customer
     * * SKUs that you can upgrade or downgrade for an entitlement.
     * Possible error codes:
     * * PERMISSION_DENIED: The customer doesn't belong to the reseller.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * </pre>
     */
    public com.google.common.util.concurrent.ListenableFuture<com.google.cloud.channel.v1.ListPurchasableSkusResponse> listPurchasableSkus(
        com.google.cloud.channel.v1.ListPurchasableSkusRequest request) {
      return io.grpc.stub.ClientCalls.futureUnaryCall(
          getChannel().newCall(getListPurchasableSkusMethod(), getCallOptions()), request);
    }

    /**
     * <pre>
     * Lists the following:
     * * Offers that you can purchase for a customer.
     * * Offers that you can change for an entitlement.
     * Possible error codes:
     * * PERMISSION_DENIED: The customer doesn't belong to the reseller
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * </pre>
     */
    public com.google.common.util.concurrent.ListenableFuture<com.google.cloud.channel.v1.ListPurchasableOffersResponse> listPurchasableOffers(
        com.google.cloud.channel.v1.ListPurchasableOffersRequest request) {
      return io.grpc.stub.ClientCalls.futureUnaryCall(
          getChannel().newCall(getListPurchasableOffersMethod(), getCallOptions()), request);
    }

    /**
     * <pre>
     * Registers a service account with subscriber privileges on the Cloud Pub/Sub
     * topic for this Channel Services account. After you create a
     * subscriber, you get the events through [SubscriberEvent][google.cloud.channel.v1.SubscriberEvent]
     * Possible error codes:
     * * PERMISSION_DENIED: The reseller account making the request and the
     * provided reseller account are different, or the impersonated user
     * is not a super admin.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * INTERNAL: Any non-user error related to a technical issue in the
     * backend. Contact Cloud Channel support.
     * * UNKNOWN: Any non-user error related to a technical issue in the backend.
     * Contact Cloud Channel support.
     * Return value:
     * The topic name with the registered service email address.
     * </pre>
     */
    public com.google.common.util.concurrent.ListenableFuture<com.google.cloud.channel.v1.RegisterSubscriberResponse> registerSubscriber(
        com.google.cloud.channel.v1.RegisterSubscriberRequest request) {
      return io.grpc.stub.ClientCalls.futureUnaryCall(
          getChannel().newCall(getRegisterSubscriberMethod(), getCallOptions()), request);
    }

    /**
     * <pre>
     * Unregisters a service account with subscriber privileges on the Cloud
     * Pub/Sub topic created for this Channel Services account. If there are no
     * service accounts left with subscriber privileges, this deletes the topic.
     * You can call ListSubscribers to check for these accounts.
     * Possible error codes:
     * * PERMISSION_DENIED: The reseller account making the request and the
     * provided reseller account are different, or the impersonated user
     * is not a super admin.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * NOT_FOUND: The topic resource doesn't exist.
     * * INTERNAL: Any non-user error related to a technical issue in the
     * backend. Contact Cloud Channel support.
     * * UNKNOWN: Any non-user error related to a technical issue in the backend.
     * Contact Cloud Channel support.
     * Return value:
     * The topic name that unregistered the service email address.
     * Returns a success response if the service email address wasn't registered
     * with the topic.
     * </pre>
     */
    public com.google.common.util.concurrent.ListenableFuture<com.google.cloud.channel.v1.UnregisterSubscriberResponse> unregisterSubscriber(
        com.google.cloud.channel.v1.UnregisterSubscriberRequest request) {
      return io.grpc.stub.ClientCalls.futureUnaryCall(
          getChannel().newCall(getUnregisterSubscriberMethod(), getCallOptions()), request);
    }

    /**
     * <pre>
     * Lists service accounts with subscriber privileges on the Cloud Pub/Sub
     * topic created for this Channel Services account.
     * Possible error codes:
     * * PERMISSION_DENIED: The reseller account making the request and the
     * provided reseller account are different, or the impersonated user
     * is not a super admin.
     * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
     * * NOT_FOUND: The topic resource doesn't exist.
     * * INTERNAL: Any non-user error related to a technical issue in the
     * backend. Contact Cloud Channel support.
     * * UNKNOWN: Any non-user error related to a technical issue in the backend.
     * Contact Cloud Channel support.
     * Return value:
     * A list of service email addresses.
     * </pre>
     */
    public com.google.common.util.concurrent.ListenableFuture<com.google.cloud.channel.v1.ListSubscribersResponse> listSubscribers(
        com.google.cloud.channel.v1.ListSubscribersRequest request) {
      return io.grpc.stub.ClientCalls.futureUnaryCall(
          getChannel().newCall(getListSubscribersMethod(), getCallOptions()), request);
    }
  }

  private static final int METHODID_LIST_CUSTOMERS = 0;
  private static final int METHODID_GET_CUSTOMER = 1;
  private static final int METHODID_CHECK_CLOUD_IDENTITY_ACCOUNTS_EXIST = 2;
  private static final int METHODID_CREATE_CUSTOMER = 3;
  private static final int METHODID_UPDATE_CUSTOMER = 4;
  private static final int METHODID_DELETE_CUSTOMER = 5;
  private static final int METHODID_PROVISION_CLOUD_IDENTITY = 6;
  private static final int METHODID_LIST_ENTITLEMENTS = 7;
  private static final int METHODID_LIST_TRANSFERABLE_SKUS = 8;
  private static final int METHODID_LIST_TRANSFERABLE_OFFERS = 9;
  private static final int METHODID_GET_ENTITLEMENT = 10;
  private static final int METHODID_CREATE_ENTITLEMENT = 11;
  private static final int METHODID_CHANGE_PARAMETERS = 12;
  private static final int METHODID_CHANGE_RENEWAL_SETTINGS = 13;
  private static final int METHODID_CHANGE_OFFER = 14;
  private static final int METHODID_START_PAID_SERVICE = 15;
  private static final int METHODID_SUSPEND_ENTITLEMENT = 16;
  private static final int METHODID_CANCEL_ENTITLEMENT = 17;
  private static final int METHODID_ACTIVATE_ENTITLEMENT = 18;
  private static final int METHODID_TRANSFER_ENTITLEMENTS = 19;
  private static final int METHODID_TRANSFER_ENTITLEMENTS_TO_GOOGLE = 20;
  private static final int METHODID_LIST_CHANNEL_PARTNER_LINKS = 21;
  private static final int METHODID_GET_CHANNEL_PARTNER_LINK = 22;
  private static final int METHODID_CREATE_CHANNEL_PARTNER_LINK = 23;
  private static final int METHODID_UPDATE_CHANNEL_PARTNER_LINK = 24;
  private static final int METHODID_LOOKUP_OFFER = 25;
  private static final int METHODID_LIST_PRODUCTS = 26;
  private static final int METHODID_LIST_SKUS = 27;
  private static final int METHODID_LIST_OFFERS = 28;
  private static final int METHODID_LIST_PURCHASABLE_SKUS = 29;
  private static final int METHODID_LIST_PURCHASABLE_OFFERS = 30;
  private static final int METHODID_REGISTER_SUBSCRIBER = 31;
  private static final int METHODID_UNREGISTER_SUBSCRIBER = 32;
  private static final int METHODID_LIST_SUBSCRIBERS = 33;

  private static final class MethodHandlers<Req, Resp> implements
      io.grpc.stub.ServerCalls.UnaryMethod<Req, Resp>,
      io.grpc.stub.ServerCalls.ServerStreamingMethod<Req, Resp>,
      io.grpc.stub.ServerCalls.ClientStreamingMethod<Req, Resp>,
      io.grpc.stub.ServerCalls.BidiStreamingMethod<Req, Resp> {
    private final CloudChannelServiceImplBase serviceImpl;
    private final int methodId;

    MethodHandlers(CloudChannelServiceImplBase serviceImpl, int methodId) {
      this.serviceImpl = serviceImpl;
      this.methodId = methodId;
    }

    @java.lang.Override
    @java.lang.SuppressWarnings("unchecked")
    public void invoke(Req request, io.grpc.stub.StreamObserver<Resp> responseObserver) {
      switch (methodId) {
        case METHODID_LIST_CUSTOMERS:
          serviceImpl.listCustomers((com.google.cloud.channel.v1.ListCustomersRequest) request,
              (io.grpc.stub.StreamObserver<com.google.cloud.channel.v1.ListCustomersResponse>) responseObserver);
          break;
        case METHODID_GET_CUSTOMER:
          serviceImpl.getCustomer((com.google.cloud.channel.v1.GetCustomerRequest) request,
              (io.grpc.stub.StreamObserver<com.google.cloud.channel.v1.Customer>) responseObserver);
          break;
        case METHODID_CHECK_CLOUD_IDENTITY_ACCOUNTS_EXIST:
          serviceImpl.checkCloudIdentityAccountsExist((com.google.cloud.channel.v1.CheckCloudIdentityAccountsExistRequest) request,
              (io.grpc.stub.StreamObserver<com.google.cloud.channel.v1.CheckCloudIdentityAccountsExistResponse>) responseObserver);
          break;
        case METHODID_CREATE_CUSTOMER:
          serviceImpl.createCustomer((com.google.cloud.channel.v1.CreateCustomerRequest) request,
              (io.grpc.stub.StreamObserver<com.google.cloud.channel.v1.Customer>) responseObserver);
          break;
        case METHODID_UPDATE_CUSTOMER:
          serviceImpl.updateCustomer((com.google.cloud.channel.v1.UpdateCustomerRequest) request,
              (io.grpc.stub.StreamObserver<com.google.cloud.channel.v1.Customer>) responseObserver);
          break;
        case METHODID_DELETE_CUSTOMER:
          serviceImpl.deleteCustomer((com.google.cloud.channel.v1.DeleteCustomerRequest) request,
              (io.grpc.stub.StreamObserver<com.google.protobuf.Empty>) responseObserver);
          break;
        case METHODID_PROVISION_CLOUD_IDENTITY:
          serviceImpl.provisionCloudIdentity((com.google.cloud.channel.v1.ProvisionCloudIdentityRequest) request,
              (io.grpc.stub.StreamObserver<com.google.longrunning.Operation>) responseObserver);
          break;
        case METHODID_LIST_ENTITLEMENTS:
          serviceImpl.listEntitlements((com.google.cloud.channel.v1.ListEntitlementsRequest) request,
              (io.grpc.stub.StreamObserver<com.google.cloud.channel.v1.ListEntitlementsResponse>) responseObserver);
          break;
        case METHODID_LIST_TRANSFERABLE_SKUS:
          serviceImpl.listTransferableSkus((com.google.cloud.channel.v1.ListTransferableSkusRequest) request,
              (io.grpc.stub.StreamObserver<com.google.cloud.channel.v1.ListTransferableSkusResponse>) responseObserver);
          break;
        case METHODID_LIST_TRANSFERABLE_OFFERS:
          serviceImpl.listTransferableOffers((com.google.cloud.channel.v1.ListTransferableOffersRequest) request,
              (io.grpc.stub.StreamObserver<com.google.cloud.channel.v1.ListTransferableOffersResponse>) responseObserver);
          break;
        case METHODID_GET_ENTITLEMENT:
          serviceImpl.getEntitlement((com.google.cloud.channel.v1.GetEntitlementRequest) request,
              (io.grpc.stub.StreamObserver<com.google.cloud.channel.v1.Entitlement>) responseObserver);
          break;
        case METHODID_CREATE_ENTITLEMENT:
          serviceImpl.createEntitlement((com.google.cloud.channel.v1.CreateEntitlementRequest) request,
              (io.grpc.stub.StreamObserver<com.google.longrunning.Operation>) responseObserver);
          break;
        case METHODID_CHANGE_PARAMETERS:
          serviceImpl.changeParameters((com.google.cloud.channel.v1.ChangeParametersRequest) request,
              (io.grpc.stub.StreamObserver<com.google.longrunning.Operation>) responseObserver);
          break;
        case METHODID_CHANGE_RENEWAL_SETTINGS:
          serviceImpl.changeRenewalSettings((com.google.cloud.channel.v1.ChangeRenewalSettingsRequest) request,
              (io.grpc.stub.StreamObserver<com.google.longrunning.Operation>) responseObserver);
          break;
        case METHODID_CHANGE_OFFER:
          serviceImpl.changeOffer((com.google.cloud.channel.v1.ChangeOfferRequest) request,
              (io.grpc.stub.StreamObserver<com.google.longrunning.Operation>) responseObserver);
          break;
        case METHODID_START_PAID_SERVICE:
          serviceImpl.startPaidService((com.google.cloud.channel.v1.StartPaidServiceRequest) request,
              (io.grpc.stub.StreamObserver<com.google.longrunning.Operation>) responseObserver);
          break;
        case METHODID_SUSPEND_ENTITLEMENT:
          serviceImpl.suspendEntitlement((com.google.cloud.channel.v1.SuspendEntitlementRequest) request,
              (io.grpc.stub.StreamObserver<com.google.longrunning.Operation>) responseObserver);
          break;
        case METHODID_CANCEL_ENTITLEMENT:
          serviceImpl.cancelEntitlement((com.google.cloud.channel.v1.CancelEntitlementRequest) request,
              (io.grpc.stub.StreamObserver<com.google.longrunning.Operation>) responseObserver);
          break;
        case METHODID_ACTIVATE_ENTITLEMENT:
          serviceImpl.activateEntitlement((com.google.cloud.channel.v1.ActivateEntitlementRequest) request,
              (io.grpc.stub.StreamObserver<com.google.longrunning.Operation>) responseObserver);
          break;
        case METHODID_TRANSFER_ENTITLEMENTS:
          serviceImpl.transferEntitlements((com.google.cloud.channel.v1.TransferEntitlementsRequest) request,
              (io.grpc.stub.StreamObserver<com.google.longrunning.Operation>) responseObserver);
          break;
        case METHODID_TRANSFER_ENTITLEMENTS_TO_GOOGLE:
          serviceImpl.transferEntitlementsToGoogle((com.google.cloud.channel.v1.TransferEntitlementsToGoogleRequest) request,
              (io.grpc.stub.StreamObserver<com.google.longrunning.Operation>) responseObserver);
          break;
        case METHODID_LIST_CHANNEL_PARTNER_LINKS:
          serviceImpl.listChannelPartnerLinks((com.google.cloud.channel.v1.ListChannelPartnerLinksRequest) request,
              (io.grpc.stub.StreamObserver<com.google.cloud.channel.v1.ListChannelPartnerLinksResponse>) responseObserver);
          break;
        case METHODID_GET_CHANNEL_PARTNER_LINK:
          serviceImpl.getChannelPartnerLink((com.google.cloud.channel.v1.GetChannelPartnerLinkRequest) request,
              (io.grpc.stub.StreamObserver<com.google.cloud.channel.v1.ChannelPartnerLink>) responseObserver);
          break;
        case METHODID_CREATE_CHANNEL_PARTNER_LINK:
          serviceImpl.createChannelPartnerLink((com.google.cloud.channel.v1.CreateChannelPartnerLinkRequest) request,
              (io.grpc.stub.StreamObserver<com.google.cloud.channel.v1.ChannelPartnerLink>) responseObserver);
          break;
        case METHODID_UPDATE_CHANNEL_PARTNER_LINK:
          serviceImpl.updateChannelPartnerLink((com.google.cloud.channel.v1.UpdateChannelPartnerLinkRequest) request,
              (io.grpc.stub.StreamObserver<com.google.cloud.channel.v1.ChannelPartnerLink>) responseObserver);
          break;
        case METHODID_LOOKUP_OFFER:
          serviceImpl.lookupOffer((com.google.cloud.channel.v1.LookupOfferRequest) request,
              (io.grpc.stub.StreamObserver<com.google.cloud.channel.v1.Offer>) responseObserver);
          break;
        case METHODID_LIST_PRODUCTS:
          serviceImpl.listProducts((com.google.cloud.channel.v1.ListProductsRequest) request,
              (io.grpc.stub.StreamObserver<com.google.cloud.channel.v1.ListProductsResponse>) responseObserver);
          break;
        case METHODID_LIST_SKUS:
          serviceImpl.listSkus((com.google.cloud.channel.v1.ListSkusRequest) request,
              (io.grpc.stub.StreamObserver<com.google.cloud.channel.v1.ListSkusResponse>) responseObserver);
          break;
        case METHODID_LIST_OFFERS:
          serviceImpl.listOffers((com.google.cloud.channel.v1.ListOffersRequest) request,
              (io.grpc.stub.StreamObserver<com.google.cloud.channel.v1.ListOffersResponse>) responseObserver);
          break;
        case METHODID_LIST_PURCHASABLE_SKUS:
          serviceImpl.listPurchasableSkus((com.google.cloud.channel.v1.ListPurchasableSkusRequest) request,
              (io.grpc.stub.StreamObserver<com.google.cloud.channel.v1.ListPurchasableSkusResponse>) responseObserver);
          break;
        case METHODID_LIST_PURCHASABLE_OFFERS:
          serviceImpl.listPurchasableOffers((com.google.cloud.channel.v1.ListPurchasableOffersRequest) request,
              (io.grpc.stub.StreamObserver<com.google.cloud.channel.v1.ListPurchasableOffersResponse>) responseObserver);
          break;
        case METHODID_REGISTER_SUBSCRIBER:
          serviceImpl.registerSubscriber((com.google.cloud.channel.v1.RegisterSubscriberRequest) request,
              (io.grpc.stub.StreamObserver<com.google.cloud.channel.v1.RegisterSubscriberResponse>) responseObserver);
          break;
        case METHODID_UNREGISTER_SUBSCRIBER:
          serviceImpl.unregisterSubscriber((com.google.cloud.channel.v1.UnregisterSubscriberRequest) request,
              (io.grpc.stub.StreamObserver<com.google.cloud.channel.v1.UnregisterSubscriberResponse>) responseObserver);
          break;
        case METHODID_LIST_SUBSCRIBERS:
          serviceImpl.listSubscribers((com.google.cloud.channel.v1.ListSubscribersRequest) request,
              (io.grpc.stub.StreamObserver<com.google.cloud.channel.v1.ListSubscribersResponse>) responseObserver);
          break;
        default:
          throw new AssertionError();
      }
    }

    @java.lang.Override
    @java.lang.SuppressWarnings("unchecked")
    public io.grpc.stub.StreamObserver<Req> invoke(
        io.grpc.stub.StreamObserver<Resp> responseObserver) {
      switch (methodId) {
        default:
          throw new AssertionError();
      }
    }
  }

  private static abstract class CloudChannelServiceBaseDescriptorSupplier
      implements io.grpc.protobuf.ProtoFileDescriptorSupplier, io.grpc.protobuf.ProtoServiceDescriptorSupplier {
    CloudChannelServiceBaseDescriptorSupplier() {}

    @java.lang.Override
    public com.google.protobuf.Descriptors.FileDescriptor getFileDescriptor() {
      return com.google.cloud.channel.v1.ServiceProto.getDescriptor();
    }

    @java.lang.Override
    public com.google.protobuf.Descriptors.ServiceDescriptor getServiceDescriptor() {
      return getFileDescriptor().findServiceByName("CloudChannelService");
    }
  }

  private static final class CloudChannelServiceFileDescriptorSupplier
      extends CloudChannelServiceBaseDescriptorSupplier {
    CloudChannelServiceFileDescriptorSupplier() {}
  }

  private static final class CloudChannelServiceMethodDescriptorSupplier
      extends CloudChannelServiceBaseDescriptorSupplier
      implements io.grpc.protobuf.ProtoMethodDescriptorSupplier {
    private final String methodName;

    CloudChannelServiceMethodDescriptorSupplier(String methodName) {
      this.methodName = methodName;
    }

    @java.lang.Override
    public com.google.protobuf.Descriptors.MethodDescriptor getMethodDescriptor() {
      return getServiceDescriptor().findMethodByName(methodName);
    }
  }

  private static volatile io.grpc.ServiceDescriptor serviceDescriptor;

  public static io.grpc.ServiceDescriptor getServiceDescriptor() {
    io.grpc.ServiceDescriptor result = serviceDescriptor;
    if (result == null) {
      synchronized (CloudChannelServiceGrpc.class) {
        result = serviceDescriptor;
        if (result == null) {
          serviceDescriptor = result = io.grpc.ServiceDescriptor.newBuilder(SERVICE_NAME)
              .setSchemaDescriptor(new CloudChannelServiceFileDescriptorSupplier())
              .addMethod(getListCustomersMethod())
              .addMethod(getGetCustomerMethod())
              .addMethod(getCheckCloudIdentityAccountsExistMethod())
              .addMethod(getCreateCustomerMethod())
              .addMethod(getUpdateCustomerMethod())
              .addMethod(getDeleteCustomerMethod())
              .addMethod(getProvisionCloudIdentityMethod())
              .addMethod(getListEntitlementsMethod())
              .addMethod(getListTransferableSkusMethod())
              .addMethod(getListTransferableOffersMethod())
              .addMethod(getGetEntitlementMethod())
              .addMethod(getCreateEntitlementMethod())
              .addMethod(getChangeParametersMethod())
              .addMethod(getChangeRenewalSettingsMethod())
              .addMethod(getChangeOfferMethod())
              .addMethod(getStartPaidServiceMethod())
              .addMethod(getSuspendEntitlementMethod())
              .addMethod(getCancelEntitlementMethod())
              .addMethod(getActivateEntitlementMethod())
              .addMethod(getTransferEntitlementsMethod())
              .addMethod(getTransferEntitlementsToGoogleMethod())
              .addMethod(getListChannelPartnerLinksMethod())
              .addMethod(getGetChannelPartnerLinkMethod())
              .addMethod(getCreateChannelPartnerLinkMethod())
              .addMethod(getUpdateChannelPartnerLinkMethod())
              .addMethod(getLookupOfferMethod())
              .addMethod(getListProductsMethod())
              .addMethod(getListSkusMethod())
              .addMethod(getListOffersMethod())
              .addMethod(getListPurchasableSkusMethod())
              .addMethod(getListPurchasableOffersMethod())
              .addMethod(getRegisterSubscriberMethod())
              .addMethod(getUnregisterSubscriberMethod())
              .addMethod(getListSubscribersMethod())
              .build();
        }
      }
    }
    return result;
  }
}
