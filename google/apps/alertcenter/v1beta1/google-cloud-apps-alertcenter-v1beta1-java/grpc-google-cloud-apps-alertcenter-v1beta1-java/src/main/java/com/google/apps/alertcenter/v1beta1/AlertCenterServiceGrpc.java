package com.google.apps.alertcenter.v1beta1;

import static io.grpc.MethodDescriptor.generateFullMethodName;

/**
 * <pre>
 * Google Workspace Alert Center API (beta).
 * </pre>
 */
@javax.annotation.Generated(
    value = "by gRPC proto compiler",
    comments = "Source: google/apps/alertcenter/v1beta1/alertcenter.proto")
public final class AlertCenterServiceGrpc {

  private AlertCenterServiceGrpc() {}

  public static final String SERVICE_NAME = "google.apps.alertcenter.v1beta1.AlertCenterService";

  // Static method descriptors that strictly reflect the proto.
  private static volatile io.grpc.MethodDescriptor<com.google.apps.alertcenter.v1beta1.ListAlertsRequest,
      com.google.apps.alertcenter.v1beta1.ListAlertsResponse> getListAlertsMethod;

  @io.grpc.stub.annotations.RpcMethod(
      fullMethodName = SERVICE_NAME + '/' + "ListAlerts",
      requestType = com.google.apps.alertcenter.v1beta1.ListAlertsRequest.class,
      responseType = com.google.apps.alertcenter.v1beta1.ListAlertsResponse.class,
      methodType = io.grpc.MethodDescriptor.MethodType.UNARY)
  public static io.grpc.MethodDescriptor<com.google.apps.alertcenter.v1beta1.ListAlertsRequest,
      com.google.apps.alertcenter.v1beta1.ListAlertsResponse> getListAlertsMethod() {
    io.grpc.MethodDescriptor<com.google.apps.alertcenter.v1beta1.ListAlertsRequest, com.google.apps.alertcenter.v1beta1.ListAlertsResponse> getListAlertsMethod;
    if ((getListAlertsMethod = AlertCenterServiceGrpc.getListAlertsMethod) == null) {
      synchronized (AlertCenterServiceGrpc.class) {
        if ((getListAlertsMethod = AlertCenterServiceGrpc.getListAlertsMethod) == null) {
          AlertCenterServiceGrpc.getListAlertsMethod = getListAlertsMethod =
              io.grpc.MethodDescriptor.<com.google.apps.alertcenter.v1beta1.ListAlertsRequest, com.google.apps.alertcenter.v1beta1.ListAlertsResponse>newBuilder()
              .setType(io.grpc.MethodDescriptor.MethodType.UNARY)
              .setFullMethodName(generateFullMethodName(SERVICE_NAME, "ListAlerts"))
              .setSampledToLocalTracing(true)
              .setRequestMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.apps.alertcenter.v1beta1.ListAlertsRequest.getDefaultInstance()))
              .setResponseMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.apps.alertcenter.v1beta1.ListAlertsResponse.getDefaultInstance()))
              .setSchemaDescriptor(new AlertCenterServiceMethodDescriptorSupplier("ListAlerts"))
              .build();
        }
      }
    }
    return getListAlertsMethod;
  }

  private static volatile io.grpc.MethodDescriptor<com.google.apps.alertcenter.v1beta1.GetAlertRequest,
      com.google.apps.alertcenter.v1beta1.Alert> getGetAlertMethod;

  @io.grpc.stub.annotations.RpcMethod(
      fullMethodName = SERVICE_NAME + '/' + "GetAlert",
      requestType = com.google.apps.alertcenter.v1beta1.GetAlertRequest.class,
      responseType = com.google.apps.alertcenter.v1beta1.Alert.class,
      methodType = io.grpc.MethodDescriptor.MethodType.UNARY)
  public static io.grpc.MethodDescriptor<com.google.apps.alertcenter.v1beta1.GetAlertRequest,
      com.google.apps.alertcenter.v1beta1.Alert> getGetAlertMethod() {
    io.grpc.MethodDescriptor<com.google.apps.alertcenter.v1beta1.GetAlertRequest, com.google.apps.alertcenter.v1beta1.Alert> getGetAlertMethod;
    if ((getGetAlertMethod = AlertCenterServiceGrpc.getGetAlertMethod) == null) {
      synchronized (AlertCenterServiceGrpc.class) {
        if ((getGetAlertMethod = AlertCenterServiceGrpc.getGetAlertMethod) == null) {
          AlertCenterServiceGrpc.getGetAlertMethod = getGetAlertMethod =
              io.grpc.MethodDescriptor.<com.google.apps.alertcenter.v1beta1.GetAlertRequest, com.google.apps.alertcenter.v1beta1.Alert>newBuilder()
              .setType(io.grpc.MethodDescriptor.MethodType.UNARY)
              .setFullMethodName(generateFullMethodName(SERVICE_NAME, "GetAlert"))
              .setSampledToLocalTracing(true)
              .setRequestMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.apps.alertcenter.v1beta1.GetAlertRequest.getDefaultInstance()))
              .setResponseMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.apps.alertcenter.v1beta1.Alert.getDefaultInstance()))
              .setSchemaDescriptor(new AlertCenterServiceMethodDescriptorSupplier("GetAlert"))
              .build();
        }
      }
    }
    return getGetAlertMethod;
  }

  private static volatile io.grpc.MethodDescriptor<com.google.apps.alertcenter.v1beta1.DeleteAlertRequest,
      com.google.protobuf.Empty> getDeleteAlertMethod;

  @io.grpc.stub.annotations.RpcMethod(
      fullMethodName = SERVICE_NAME + '/' + "DeleteAlert",
      requestType = com.google.apps.alertcenter.v1beta1.DeleteAlertRequest.class,
      responseType = com.google.protobuf.Empty.class,
      methodType = io.grpc.MethodDescriptor.MethodType.UNARY)
  public static io.grpc.MethodDescriptor<com.google.apps.alertcenter.v1beta1.DeleteAlertRequest,
      com.google.protobuf.Empty> getDeleteAlertMethod() {
    io.grpc.MethodDescriptor<com.google.apps.alertcenter.v1beta1.DeleteAlertRequest, com.google.protobuf.Empty> getDeleteAlertMethod;
    if ((getDeleteAlertMethod = AlertCenterServiceGrpc.getDeleteAlertMethod) == null) {
      synchronized (AlertCenterServiceGrpc.class) {
        if ((getDeleteAlertMethod = AlertCenterServiceGrpc.getDeleteAlertMethod) == null) {
          AlertCenterServiceGrpc.getDeleteAlertMethod = getDeleteAlertMethod =
              io.grpc.MethodDescriptor.<com.google.apps.alertcenter.v1beta1.DeleteAlertRequest, com.google.protobuf.Empty>newBuilder()
              .setType(io.grpc.MethodDescriptor.MethodType.UNARY)
              .setFullMethodName(generateFullMethodName(SERVICE_NAME, "DeleteAlert"))
              .setSampledToLocalTracing(true)
              .setRequestMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.apps.alertcenter.v1beta1.DeleteAlertRequest.getDefaultInstance()))
              .setResponseMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.protobuf.Empty.getDefaultInstance()))
              .setSchemaDescriptor(new AlertCenterServiceMethodDescriptorSupplier("DeleteAlert"))
              .build();
        }
      }
    }
    return getDeleteAlertMethod;
  }

  private static volatile io.grpc.MethodDescriptor<com.google.apps.alertcenter.v1beta1.UndeleteAlertRequest,
      com.google.apps.alertcenter.v1beta1.Alert> getUndeleteAlertMethod;

  @io.grpc.stub.annotations.RpcMethod(
      fullMethodName = SERVICE_NAME + '/' + "UndeleteAlert",
      requestType = com.google.apps.alertcenter.v1beta1.UndeleteAlertRequest.class,
      responseType = com.google.apps.alertcenter.v1beta1.Alert.class,
      methodType = io.grpc.MethodDescriptor.MethodType.UNARY)
  public static io.grpc.MethodDescriptor<com.google.apps.alertcenter.v1beta1.UndeleteAlertRequest,
      com.google.apps.alertcenter.v1beta1.Alert> getUndeleteAlertMethod() {
    io.grpc.MethodDescriptor<com.google.apps.alertcenter.v1beta1.UndeleteAlertRequest, com.google.apps.alertcenter.v1beta1.Alert> getUndeleteAlertMethod;
    if ((getUndeleteAlertMethod = AlertCenterServiceGrpc.getUndeleteAlertMethod) == null) {
      synchronized (AlertCenterServiceGrpc.class) {
        if ((getUndeleteAlertMethod = AlertCenterServiceGrpc.getUndeleteAlertMethod) == null) {
          AlertCenterServiceGrpc.getUndeleteAlertMethod = getUndeleteAlertMethod =
              io.grpc.MethodDescriptor.<com.google.apps.alertcenter.v1beta1.UndeleteAlertRequest, com.google.apps.alertcenter.v1beta1.Alert>newBuilder()
              .setType(io.grpc.MethodDescriptor.MethodType.UNARY)
              .setFullMethodName(generateFullMethodName(SERVICE_NAME, "UndeleteAlert"))
              .setSampledToLocalTracing(true)
              .setRequestMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.apps.alertcenter.v1beta1.UndeleteAlertRequest.getDefaultInstance()))
              .setResponseMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.apps.alertcenter.v1beta1.Alert.getDefaultInstance()))
              .setSchemaDescriptor(new AlertCenterServiceMethodDescriptorSupplier("UndeleteAlert"))
              .build();
        }
      }
    }
    return getUndeleteAlertMethod;
  }

  private static volatile io.grpc.MethodDescriptor<com.google.apps.alertcenter.v1beta1.CreateAlertFeedbackRequest,
      com.google.apps.alertcenter.v1beta1.AlertFeedback> getCreateAlertFeedbackMethod;

  @io.grpc.stub.annotations.RpcMethod(
      fullMethodName = SERVICE_NAME + '/' + "CreateAlertFeedback",
      requestType = com.google.apps.alertcenter.v1beta1.CreateAlertFeedbackRequest.class,
      responseType = com.google.apps.alertcenter.v1beta1.AlertFeedback.class,
      methodType = io.grpc.MethodDescriptor.MethodType.UNARY)
  public static io.grpc.MethodDescriptor<com.google.apps.alertcenter.v1beta1.CreateAlertFeedbackRequest,
      com.google.apps.alertcenter.v1beta1.AlertFeedback> getCreateAlertFeedbackMethod() {
    io.grpc.MethodDescriptor<com.google.apps.alertcenter.v1beta1.CreateAlertFeedbackRequest, com.google.apps.alertcenter.v1beta1.AlertFeedback> getCreateAlertFeedbackMethod;
    if ((getCreateAlertFeedbackMethod = AlertCenterServiceGrpc.getCreateAlertFeedbackMethod) == null) {
      synchronized (AlertCenterServiceGrpc.class) {
        if ((getCreateAlertFeedbackMethod = AlertCenterServiceGrpc.getCreateAlertFeedbackMethod) == null) {
          AlertCenterServiceGrpc.getCreateAlertFeedbackMethod = getCreateAlertFeedbackMethod =
              io.grpc.MethodDescriptor.<com.google.apps.alertcenter.v1beta1.CreateAlertFeedbackRequest, com.google.apps.alertcenter.v1beta1.AlertFeedback>newBuilder()
              .setType(io.grpc.MethodDescriptor.MethodType.UNARY)
              .setFullMethodName(generateFullMethodName(SERVICE_NAME, "CreateAlertFeedback"))
              .setSampledToLocalTracing(true)
              .setRequestMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.apps.alertcenter.v1beta1.CreateAlertFeedbackRequest.getDefaultInstance()))
              .setResponseMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.apps.alertcenter.v1beta1.AlertFeedback.getDefaultInstance()))
              .setSchemaDescriptor(new AlertCenterServiceMethodDescriptorSupplier("CreateAlertFeedback"))
              .build();
        }
      }
    }
    return getCreateAlertFeedbackMethod;
  }

  private static volatile io.grpc.MethodDescriptor<com.google.apps.alertcenter.v1beta1.ListAlertFeedbackRequest,
      com.google.apps.alertcenter.v1beta1.ListAlertFeedbackResponse> getListAlertFeedbackMethod;

  @io.grpc.stub.annotations.RpcMethod(
      fullMethodName = SERVICE_NAME + '/' + "ListAlertFeedback",
      requestType = com.google.apps.alertcenter.v1beta1.ListAlertFeedbackRequest.class,
      responseType = com.google.apps.alertcenter.v1beta1.ListAlertFeedbackResponse.class,
      methodType = io.grpc.MethodDescriptor.MethodType.UNARY)
  public static io.grpc.MethodDescriptor<com.google.apps.alertcenter.v1beta1.ListAlertFeedbackRequest,
      com.google.apps.alertcenter.v1beta1.ListAlertFeedbackResponse> getListAlertFeedbackMethod() {
    io.grpc.MethodDescriptor<com.google.apps.alertcenter.v1beta1.ListAlertFeedbackRequest, com.google.apps.alertcenter.v1beta1.ListAlertFeedbackResponse> getListAlertFeedbackMethod;
    if ((getListAlertFeedbackMethod = AlertCenterServiceGrpc.getListAlertFeedbackMethod) == null) {
      synchronized (AlertCenterServiceGrpc.class) {
        if ((getListAlertFeedbackMethod = AlertCenterServiceGrpc.getListAlertFeedbackMethod) == null) {
          AlertCenterServiceGrpc.getListAlertFeedbackMethod = getListAlertFeedbackMethod =
              io.grpc.MethodDescriptor.<com.google.apps.alertcenter.v1beta1.ListAlertFeedbackRequest, com.google.apps.alertcenter.v1beta1.ListAlertFeedbackResponse>newBuilder()
              .setType(io.grpc.MethodDescriptor.MethodType.UNARY)
              .setFullMethodName(generateFullMethodName(SERVICE_NAME, "ListAlertFeedback"))
              .setSampledToLocalTracing(true)
              .setRequestMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.apps.alertcenter.v1beta1.ListAlertFeedbackRequest.getDefaultInstance()))
              .setResponseMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.apps.alertcenter.v1beta1.ListAlertFeedbackResponse.getDefaultInstance()))
              .setSchemaDescriptor(new AlertCenterServiceMethodDescriptorSupplier("ListAlertFeedback"))
              .build();
        }
      }
    }
    return getListAlertFeedbackMethod;
  }

  private static volatile io.grpc.MethodDescriptor<com.google.apps.alertcenter.v1beta1.GetAlertMetadataRequest,
      com.google.apps.alertcenter.v1beta1.AlertMetadata> getGetAlertMetadataMethod;

  @io.grpc.stub.annotations.RpcMethod(
      fullMethodName = SERVICE_NAME + '/' + "GetAlertMetadata",
      requestType = com.google.apps.alertcenter.v1beta1.GetAlertMetadataRequest.class,
      responseType = com.google.apps.alertcenter.v1beta1.AlertMetadata.class,
      methodType = io.grpc.MethodDescriptor.MethodType.UNARY)
  public static io.grpc.MethodDescriptor<com.google.apps.alertcenter.v1beta1.GetAlertMetadataRequest,
      com.google.apps.alertcenter.v1beta1.AlertMetadata> getGetAlertMetadataMethod() {
    io.grpc.MethodDescriptor<com.google.apps.alertcenter.v1beta1.GetAlertMetadataRequest, com.google.apps.alertcenter.v1beta1.AlertMetadata> getGetAlertMetadataMethod;
    if ((getGetAlertMetadataMethod = AlertCenterServiceGrpc.getGetAlertMetadataMethod) == null) {
      synchronized (AlertCenterServiceGrpc.class) {
        if ((getGetAlertMetadataMethod = AlertCenterServiceGrpc.getGetAlertMetadataMethod) == null) {
          AlertCenterServiceGrpc.getGetAlertMetadataMethod = getGetAlertMetadataMethod =
              io.grpc.MethodDescriptor.<com.google.apps.alertcenter.v1beta1.GetAlertMetadataRequest, com.google.apps.alertcenter.v1beta1.AlertMetadata>newBuilder()
              .setType(io.grpc.MethodDescriptor.MethodType.UNARY)
              .setFullMethodName(generateFullMethodName(SERVICE_NAME, "GetAlertMetadata"))
              .setSampledToLocalTracing(true)
              .setRequestMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.apps.alertcenter.v1beta1.GetAlertMetadataRequest.getDefaultInstance()))
              .setResponseMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.apps.alertcenter.v1beta1.AlertMetadata.getDefaultInstance()))
              .setSchemaDescriptor(new AlertCenterServiceMethodDescriptorSupplier("GetAlertMetadata"))
              .build();
        }
      }
    }
    return getGetAlertMetadataMethod;
  }

  private static volatile io.grpc.MethodDescriptor<com.google.apps.alertcenter.v1beta1.GetSettingsRequest,
      com.google.apps.alertcenter.v1beta1.Settings> getGetSettingsMethod;

  @io.grpc.stub.annotations.RpcMethod(
      fullMethodName = SERVICE_NAME + '/' + "GetSettings",
      requestType = com.google.apps.alertcenter.v1beta1.GetSettingsRequest.class,
      responseType = com.google.apps.alertcenter.v1beta1.Settings.class,
      methodType = io.grpc.MethodDescriptor.MethodType.UNARY)
  public static io.grpc.MethodDescriptor<com.google.apps.alertcenter.v1beta1.GetSettingsRequest,
      com.google.apps.alertcenter.v1beta1.Settings> getGetSettingsMethod() {
    io.grpc.MethodDescriptor<com.google.apps.alertcenter.v1beta1.GetSettingsRequest, com.google.apps.alertcenter.v1beta1.Settings> getGetSettingsMethod;
    if ((getGetSettingsMethod = AlertCenterServiceGrpc.getGetSettingsMethod) == null) {
      synchronized (AlertCenterServiceGrpc.class) {
        if ((getGetSettingsMethod = AlertCenterServiceGrpc.getGetSettingsMethod) == null) {
          AlertCenterServiceGrpc.getGetSettingsMethod = getGetSettingsMethod =
              io.grpc.MethodDescriptor.<com.google.apps.alertcenter.v1beta1.GetSettingsRequest, com.google.apps.alertcenter.v1beta1.Settings>newBuilder()
              .setType(io.grpc.MethodDescriptor.MethodType.UNARY)
              .setFullMethodName(generateFullMethodName(SERVICE_NAME, "GetSettings"))
              .setSampledToLocalTracing(true)
              .setRequestMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.apps.alertcenter.v1beta1.GetSettingsRequest.getDefaultInstance()))
              .setResponseMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.apps.alertcenter.v1beta1.Settings.getDefaultInstance()))
              .setSchemaDescriptor(new AlertCenterServiceMethodDescriptorSupplier("GetSettings"))
              .build();
        }
      }
    }
    return getGetSettingsMethod;
  }

  private static volatile io.grpc.MethodDescriptor<com.google.apps.alertcenter.v1beta1.UpdateSettingsRequest,
      com.google.apps.alertcenter.v1beta1.Settings> getUpdateSettingsMethod;

  @io.grpc.stub.annotations.RpcMethod(
      fullMethodName = SERVICE_NAME + '/' + "UpdateSettings",
      requestType = com.google.apps.alertcenter.v1beta1.UpdateSettingsRequest.class,
      responseType = com.google.apps.alertcenter.v1beta1.Settings.class,
      methodType = io.grpc.MethodDescriptor.MethodType.UNARY)
  public static io.grpc.MethodDescriptor<com.google.apps.alertcenter.v1beta1.UpdateSettingsRequest,
      com.google.apps.alertcenter.v1beta1.Settings> getUpdateSettingsMethod() {
    io.grpc.MethodDescriptor<com.google.apps.alertcenter.v1beta1.UpdateSettingsRequest, com.google.apps.alertcenter.v1beta1.Settings> getUpdateSettingsMethod;
    if ((getUpdateSettingsMethod = AlertCenterServiceGrpc.getUpdateSettingsMethod) == null) {
      synchronized (AlertCenterServiceGrpc.class) {
        if ((getUpdateSettingsMethod = AlertCenterServiceGrpc.getUpdateSettingsMethod) == null) {
          AlertCenterServiceGrpc.getUpdateSettingsMethod = getUpdateSettingsMethod =
              io.grpc.MethodDescriptor.<com.google.apps.alertcenter.v1beta1.UpdateSettingsRequest, com.google.apps.alertcenter.v1beta1.Settings>newBuilder()
              .setType(io.grpc.MethodDescriptor.MethodType.UNARY)
              .setFullMethodName(generateFullMethodName(SERVICE_NAME, "UpdateSettings"))
              .setSampledToLocalTracing(true)
              .setRequestMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.apps.alertcenter.v1beta1.UpdateSettingsRequest.getDefaultInstance()))
              .setResponseMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.apps.alertcenter.v1beta1.Settings.getDefaultInstance()))
              .setSchemaDescriptor(new AlertCenterServiceMethodDescriptorSupplier("UpdateSettings"))
              .build();
        }
      }
    }
    return getUpdateSettingsMethod;
  }

  private static volatile io.grpc.MethodDescriptor<com.google.apps.alertcenter.v1beta1.BatchDeleteAlertsRequest,
      com.google.apps.alertcenter.v1beta1.BatchDeleteAlertsResponse> getBatchDeleteAlertsMethod;

  @io.grpc.stub.annotations.RpcMethod(
      fullMethodName = SERVICE_NAME + '/' + "BatchDeleteAlerts",
      requestType = com.google.apps.alertcenter.v1beta1.BatchDeleteAlertsRequest.class,
      responseType = com.google.apps.alertcenter.v1beta1.BatchDeleteAlertsResponse.class,
      methodType = io.grpc.MethodDescriptor.MethodType.UNARY)
  public static io.grpc.MethodDescriptor<com.google.apps.alertcenter.v1beta1.BatchDeleteAlertsRequest,
      com.google.apps.alertcenter.v1beta1.BatchDeleteAlertsResponse> getBatchDeleteAlertsMethod() {
    io.grpc.MethodDescriptor<com.google.apps.alertcenter.v1beta1.BatchDeleteAlertsRequest, com.google.apps.alertcenter.v1beta1.BatchDeleteAlertsResponse> getBatchDeleteAlertsMethod;
    if ((getBatchDeleteAlertsMethod = AlertCenterServiceGrpc.getBatchDeleteAlertsMethod) == null) {
      synchronized (AlertCenterServiceGrpc.class) {
        if ((getBatchDeleteAlertsMethod = AlertCenterServiceGrpc.getBatchDeleteAlertsMethod) == null) {
          AlertCenterServiceGrpc.getBatchDeleteAlertsMethod = getBatchDeleteAlertsMethod =
              io.grpc.MethodDescriptor.<com.google.apps.alertcenter.v1beta1.BatchDeleteAlertsRequest, com.google.apps.alertcenter.v1beta1.BatchDeleteAlertsResponse>newBuilder()
              .setType(io.grpc.MethodDescriptor.MethodType.UNARY)
              .setFullMethodName(generateFullMethodName(SERVICE_NAME, "BatchDeleteAlerts"))
              .setSampledToLocalTracing(true)
              .setRequestMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.apps.alertcenter.v1beta1.BatchDeleteAlertsRequest.getDefaultInstance()))
              .setResponseMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.apps.alertcenter.v1beta1.BatchDeleteAlertsResponse.getDefaultInstance()))
              .setSchemaDescriptor(new AlertCenterServiceMethodDescriptorSupplier("BatchDeleteAlerts"))
              .build();
        }
      }
    }
    return getBatchDeleteAlertsMethod;
  }

  private static volatile io.grpc.MethodDescriptor<com.google.apps.alertcenter.v1beta1.BatchUndeleteAlertsRequest,
      com.google.apps.alertcenter.v1beta1.BatchUndeleteAlertsResponse> getBatchUndeleteAlertsMethod;

  @io.grpc.stub.annotations.RpcMethod(
      fullMethodName = SERVICE_NAME + '/' + "BatchUndeleteAlerts",
      requestType = com.google.apps.alertcenter.v1beta1.BatchUndeleteAlertsRequest.class,
      responseType = com.google.apps.alertcenter.v1beta1.BatchUndeleteAlertsResponse.class,
      methodType = io.grpc.MethodDescriptor.MethodType.UNARY)
  public static io.grpc.MethodDescriptor<com.google.apps.alertcenter.v1beta1.BatchUndeleteAlertsRequest,
      com.google.apps.alertcenter.v1beta1.BatchUndeleteAlertsResponse> getBatchUndeleteAlertsMethod() {
    io.grpc.MethodDescriptor<com.google.apps.alertcenter.v1beta1.BatchUndeleteAlertsRequest, com.google.apps.alertcenter.v1beta1.BatchUndeleteAlertsResponse> getBatchUndeleteAlertsMethod;
    if ((getBatchUndeleteAlertsMethod = AlertCenterServiceGrpc.getBatchUndeleteAlertsMethod) == null) {
      synchronized (AlertCenterServiceGrpc.class) {
        if ((getBatchUndeleteAlertsMethod = AlertCenterServiceGrpc.getBatchUndeleteAlertsMethod) == null) {
          AlertCenterServiceGrpc.getBatchUndeleteAlertsMethod = getBatchUndeleteAlertsMethod =
              io.grpc.MethodDescriptor.<com.google.apps.alertcenter.v1beta1.BatchUndeleteAlertsRequest, com.google.apps.alertcenter.v1beta1.BatchUndeleteAlertsResponse>newBuilder()
              .setType(io.grpc.MethodDescriptor.MethodType.UNARY)
              .setFullMethodName(generateFullMethodName(SERVICE_NAME, "BatchUndeleteAlerts"))
              .setSampledToLocalTracing(true)
              .setRequestMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.apps.alertcenter.v1beta1.BatchUndeleteAlertsRequest.getDefaultInstance()))
              .setResponseMarshaller(io.grpc.protobuf.ProtoUtils.marshaller(
                  com.google.apps.alertcenter.v1beta1.BatchUndeleteAlertsResponse.getDefaultInstance()))
              .setSchemaDescriptor(new AlertCenterServiceMethodDescriptorSupplier("BatchUndeleteAlerts"))
              .build();
        }
      }
    }
    return getBatchUndeleteAlertsMethod;
  }

  /**
   * Creates a new async stub that supports all call types for the service
   */
  public static AlertCenterServiceStub newStub(io.grpc.Channel channel) {
    io.grpc.stub.AbstractStub.StubFactory<AlertCenterServiceStub> factory =
      new io.grpc.stub.AbstractStub.StubFactory<AlertCenterServiceStub>() {
        @java.lang.Override
        public AlertCenterServiceStub newStub(io.grpc.Channel channel, io.grpc.CallOptions callOptions) {
          return new AlertCenterServiceStub(channel, callOptions);
        }
      };
    return AlertCenterServiceStub.newStub(factory, channel);
  }

  /**
   * Creates a new blocking-style stub that supports unary and streaming output calls on the service
   */
  public static AlertCenterServiceBlockingStub newBlockingStub(
      io.grpc.Channel channel) {
    io.grpc.stub.AbstractStub.StubFactory<AlertCenterServiceBlockingStub> factory =
      new io.grpc.stub.AbstractStub.StubFactory<AlertCenterServiceBlockingStub>() {
        @java.lang.Override
        public AlertCenterServiceBlockingStub newStub(io.grpc.Channel channel, io.grpc.CallOptions callOptions) {
          return new AlertCenterServiceBlockingStub(channel, callOptions);
        }
      };
    return AlertCenterServiceBlockingStub.newStub(factory, channel);
  }

  /**
   * Creates a new ListenableFuture-style stub that supports unary calls on the service
   */
  public static AlertCenterServiceFutureStub newFutureStub(
      io.grpc.Channel channel) {
    io.grpc.stub.AbstractStub.StubFactory<AlertCenterServiceFutureStub> factory =
      new io.grpc.stub.AbstractStub.StubFactory<AlertCenterServiceFutureStub>() {
        @java.lang.Override
        public AlertCenterServiceFutureStub newStub(io.grpc.Channel channel, io.grpc.CallOptions callOptions) {
          return new AlertCenterServiceFutureStub(channel, callOptions);
        }
      };
    return AlertCenterServiceFutureStub.newStub(factory, channel);
  }

  /**
   * <pre>
   * Google Workspace Alert Center API (beta).
   * </pre>
   */
  public static abstract class AlertCenterServiceImplBase implements io.grpc.BindableService {

    /**
     * <pre>
     * Lists the alerts.
     * </pre>
     */
    public void listAlerts(com.google.apps.alertcenter.v1beta1.ListAlertsRequest request,
        io.grpc.stub.StreamObserver<com.google.apps.alertcenter.v1beta1.ListAlertsResponse> responseObserver) {
      io.grpc.stub.ServerCalls.asyncUnimplementedUnaryCall(getListAlertsMethod(), responseObserver);
    }

    /**
     * <pre>
     * Gets the specified alert. Attempting to get a nonexistent alert returns
     * `NOT_FOUND` error.
     * </pre>
     */
    public void getAlert(com.google.apps.alertcenter.v1beta1.GetAlertRequest request,
        io.grpc.stub.StreamObserver<com.google.apps.alertcenter.v1beta1.Alert> responseObserver) {
      io.grpc.stub.ServerCalls.asyncUnimplementedUnaryCall(getGetAlertMethod(), responseObserver);
    }

    /**
     * <pre>
     * Marks the specified alert for deletion. An alert that has been marked for
     * deletion is removed from Alert Center after 30 days.
     * Marking an alert for deletion has no effect on an alert which has
     * already been marked for deletion. Attempting to mark a nonexistent alert
     * for deletion results in a `NOT_FOUND` error.
     * </pre>
     */
    public void deleteAlert(com.google.apps.alertcenter.v1beta1.DeleteAlertRequest request,
        io.grpc.stub.StreamObserver<com.google.protobuf.Empty> responseObserver) {
      io.grpc.stub.ServerCalls.asyncUnimplementedUnaryCall(getDeleteAlertMethod(), responseObserver);
    }

    /**
     * <pre>
     * Restores, or "undeletes", an alert that was marked for deletion within the
     * past 30 days. Attempting to undelete an alert which was marked for deletion
     * over 30 days ago (which has been removed from the Alert Center database) or
     * a nonexistent alert returns a `NOT_FOUND` error. Attempting to
     * undelete an alert which has not been marked for deletion has no effect.
     * </pre>
     */
    public void undeleteAlert(com.google.apps.alertcenter.v1beta1.UndeleteAlertRequest request,
        io.grpc.stub.StreamObserver<com.google.apps.alertcenter.v1beta1.Alert> responseObserver) {
      io.grpc.stub.ServerCalls.asyncUnimplementedUnaryCall(getUndeleteAlertMethod(), responseObserver);
    }

    /**
     * <pre>
     * Creates new feedback for an alert. Attempting to create a feedback for
     * a non-existent alert returns `NOT_FOUND` error. Attempting to create a
     * feedback for an alert that is marked for deletion returns
     * `FAILED_PRECONDITION' error.
     * </pre>
     */
    public void createAlertFeedback(com.google.apps.alertcenter.v1beta1.CreateAlertFeedbackRequest request,
        io.grpc.stub.StreamObserver<com.google.apps.alertcenter.v1beta1.AlertFeedback> responseObserver) {
      io.grpc.stub.ServerCalls.asyncUnimplementedUnaryCall(getCreateAlertFeedbackMethod(), responseObserver);
    }

    /**
     * <pre>
     * Lists all the feedback for an alert. Attempting to list feedbacks for
     * a non-existent alert returns `NOT_FOUND` error.
     * </pre>
     */
    public void listAlertFeedback(com.google.apps.alertcenter.v1beta1.ListAlertFeedbackRequest request,
        io.grpc.stub.StreamObserver<com.google.apps.alertcenter.v1beta1.ListAlertFeedbackResponse> responseObserver) {
      io.grpc.stub.ServerCalls.asyncUnimplementedUnaryCall(getListAlertFeedbackMethod(), responseObserver);
    }

    /**
     * <pre>
     * Returns the metadata of an alert. Attempting to get metadata for
     * a non-existent alert returns `NOT_FOUND` error.
     * </pre>
     */
    public void getAlertMetadata(com.google.apps.alertcenter.v1beta1.GetAlertMetadataRequest request,
        io.grpc.stub.StreamObserver<com.google.apps.alertcenter.v1beta1.AlertMetadata> responseObserver) {
      io.grpc.stub.ServerCalls.asyncUnimplementedUnaryCall(getGetAlertMetadataMethod(), responseObserver);
    }

    /**
     * <pre>
     * Returns customer-level settings.
     * </pre>
     */
    public void getSettings(com.google.apps.alertcenter.v1beta1.GetSettingsRequest request,
        io.grpc.stub.StreamObserver<com.google.apps.alertcenter.v1beta1.Settings> responseObserver) {
      io.grpc.stub.ServerCalls.asyncUnimplementedUnaryCall(getGetSettingsMethod(), responseObserver);
    }

    /**
     * <pre>
     * Updates the customer-level settings.
     * </pre>
     */
    public void updateSettings(com.google.apps.alertcenter.v1beta1.UpdateSettingsRequest request,
        io.grpc.stub.StreamObserver<com.google.apps.alertcenter.v1beta1.Settings> responseObserver) {
      io.grpc.stub.ServerCalls.asyncUnimplementedUnaryCall(getUpdateSettingsMethod(), responseObserver);
    }

    /**
     * <pre>
     * Performs batch delete operation on alerts.
     * </pre>
     */
    public void batchDeleteAlerts(com.google.apps.alertcenter.v1beta1.BatchDeleteAlertsRequest request,
        io.grpc.stub.StreamObserver<com.google.apps.alertcenter.v1beta1.BatchDeleteAlertsResponse> responseObserver) {
      io.grpc.stub.ServerCalls.asyncUnimplementedUnaryCall(getBatchDeleteAlertsMethod(), responseObserver);
    }

    /**
     * <pre>
     * Performs batch undelete operation on alerts.
     * </pre>
     */
    public void batchUndeleteAlerts(com.google.apps.alertcenter.v1beta1.BatchUndeleteAlertsRequest request,
        io.grpc.stub.StreamObserver<com.google.apps.alertcenter.v1beta1.BatchUndeleteAlertsResponse> responseObserver) {
      io.grpc.stub.ServerCalls.asyncUnimplementedUnaryCall(getBatchUndeleteAlertsMethod(), responseObserver);
    }

    @java.lang.Override public final io.grpc.ServerServiceDefinition bindService() {
      return io.grpc.ServerServiceDefinition.builder(getServiceDescriptor())
          .addMethod(
            getListAlertsMethod(),
            io.grpc.stub.ServerCalls.asyncUnaryCall(
              new MethodHandlers<
                com.google.apps.alertcenter.v1beta1.ListAlertsRequest,
                com.google.apps.alertcenter.v1beta1.ListAlertsResponse>(
                  this, METHODID_LIST_ALERTS)))
          .addMethod(
            getGetAlertMethod(),
            io.grpc.stub.ServerCalls.asyncUnaryCall(
              new MethodHandlers<
                com.google.apps.alertcenter.v1beta1.GetAlertRequest,
                com.google.apps.alertcenter.v1beta1.Alert>(
                  this, METHODID_GET_ALERT)))
          .addMethod(
            getDeleteAlertMethod(),
            io.grpc.stub.ServerCalls.asyncUnaryCall(
              new MethodHandlers<
                com.google.apps.alertcenter.v1beta1.DeleteAlertRequest,
                com.google.protobuf.Empty>(
                  this, METHODID_DELETE_ALERT)))
          .addMethod(
            getUndeleteAlertMethod(),
            io.grpc.stub.ServerCalls.asyncUnaryCall(
              new MethodHandlers<
                com.google.apps.alertcenter.v1beta1.UndeleteAlertRequest,
                com.google.apps.alertcenter.v1beta1.Alert>(
                  this, METHODID_UNDELETE_ALERT)))
          .addMethod(
            getCreateAlertFeedbackMethod(),
            io.grpc.stub.ServerCalls.asyncUnaryCall(
              new MethodHandlers<
                com.google.apps.alertcenter.v1beta1.CreateAlertFeedbackRequest,
                com.google.apps.alertcenter.v1beta1.AlertFeedback>(
                  this, METHODID_CREATE_ALERT_FEEDBACK)))
          .addMethod(
            getListAlertFeedbackMethod(),
            io.grpc.stub.ServerCalls.asyncUnaryCall(
              new MethodHandlers<
                com.google.apps.alertcenter.v1beta1.ListAlertFeedbackRequest,
                com.google.apps.alertcenter.v1beta1.ListAlertFeedbackResponse>(
                  this, METHODID_LIST_ALERT_FEEDBACK)))
          .addMethod(
            getGetAlertMetadataMethod(),
            io.grpc.stub.ServerCalls.asyncUnaryCall(
              new MethodHandlers<
                com.google.apps.alertcenter.v1beta1.GetAlertMetadataRequest,
                com.google.apps.alertcenter.v1beta1.AlertMetadata>(
                  this, METHODID_GET_ALERT_METADATA)))
          .addMethod(
            getGetSettingsMethod(),
            io.grpc.stub.ServerCalls.asyncUnaryCall(
              new MethodHandlers<
                com.google.apps.alertcenter.v1beta1.GetSettingsRequest,
                com.google.apps.alertcenter.v1beta1.Settings>(
                  this, METHODID_GET_SETTINGS)))
          .addMethod(
            getUpdateSettingsMethod(),
            io.grpc.stub.ServerCalls.asyncUnaryCall(
              new MethodHandlers<
                com.google.apps.alertcenter.v1beta1.UpdateSettingsRequest,
                com.google.apps.alertcenter.v1beta1.Settings>(
                  this, METHODID_UPDATE_SETTINGS)))
          .addMethod(
            getBatchDeleteAlertsMethod(),
            io.grpc.stub.ServerCalls.asyncUnaryCall(
              new MethodHandlers<
                com.google.apps.alertcenter.v1beta1.BatchDeleteAlertsRequest,
                com.google.apps.alertcenter.v1beta1.BatchDeleteAlertsResponse>(
                  this, METHODID_BATCH_DELETE_ALERTS)))
          .addMethod(
            getBatchUndeleteAlertsMethod(),
            io.grpc.stub.ServerCalls.asyncUnaryCall(
              new MethodHandlers<
                com.google.apps.alertcenter.v1beta1.BatchUndeleteAlertsRequest,
                com.google.apps.alertcenter.v1beta1.BatchUndeleteAlertsResponse>(
                  this, METHODID_BATCH_UNDELETE_ALERTS)))
          .build();
    }
  }

  /**
   * <pre>
   * Google Workspace Alert Center API (beta).
   * </pre>
   */
  public static final class AlertCenterServiceStub extends io.grpc.stub.AbstractAsyncStub<AlertCenterServiceStub> {
    private AlertCenterServiceStub(
        io.grpc.Channel channel, io.grpc.CallOptions callOptions) {
      super(channel, callOptions);
    }

    @java.lang.Override
    protected AlertCenterServiceStub build(
        io.grpc.Channel channel, io.grpc.CallOptions callOptions) {
      return new AlertCenterServiceStub(channel, callOptions);
    }

    /**
     * <pre>
     * Lists the alerts.
     * </pre>
     */
    public void listAlerts(com.google.apps.alertcenter.v1beta1.ListAlertsRequest request,
        io.grpc.stub.StreamObserver<com.google.apps.alertcenter.v1beta1.ListAlertsResponse> responseObserver) {
      io.grpc.stub.ClientCalls.asyncUnaryCall(
          getChannel().newCall(getListAlertsMethod(), getCallOptions()), request, responseObserver);
    }

    /**
     * <pre>
     * Gets the specified alert. Attempting to get a nonexistent alert returns
     * `NOT_FOUND` error.
     * </pre>
     */
    public void getAlert(com.google.apps.alertcenter.v1beta1.GetAlertRequest request,
        io.grpc.stub.StreamObserver<com.google.apps.alertcenter.v1beta1.Alert> responseObserver) {
      io.grpc.stub.ClientCalls.asyncUnaryCall(
          getChannel().newCall(getGetAlertMethod(), getCallOptions()), request, responseObserver);
    }

    /**
     * <pre>
     * Marks the specified alert for deletion. An alert that has been marked for
     * deletion is removed from Alert Center after 30 days.
     * Marking an alert for deletion has no effect on an alert which has
     * already been marked for deletion. Attempting to mark a nonexistent alert
     * for deletion results in a `NOT_FOUND` error.
     * </pre>
     */
    public void deleteAlert(com.google.apps.alertcenter.v1beta1.DeleteAlertRequest request,
        io.grpc.stub.StreamObserver<com.google.protobuf.Empty> responseObserver) {
      io.grpc.stub.ClientCalls.asyncUnaryCall(
          getChannel().newCall(getDeleteAlertMethod(), getCallOptions()), request, responseObserver);
    }

    /**
     * <pre>
     * Restores, or "undeletes", an alert that was marked for deletion within the
     * past 30 days. Attempting to undelete an alert which was marked for deletion
     * over 30 days ago (which has been removed from the Alert Center database) or
     * a nonexistent alert returns a `NOT_FOUND` error. Attempting to
     * undelete an alert which has not been marked for deletion has no effect.
     * </pre>
     */
    public void undeleteAlert(com.google.apps.alertcenter.v1beta1.UndeleteAlertRequest request,
        io.grpc.stub.StreamObserver<com.google.apps.alertcenter.v1beta1.Alert> responseObserver) {
      io.grpc.stub.ClientCalls.asyncUnaryCall(
          getChannel().newCall(getUndeleteAlertMethod(), getCallOptions()), request, responseObserver);
    }

    /**
     * <pre>
     * Creates new feedback for an alert. Attempting to create a feedback for
     * a non-existent alert returns `NOT_FOUND` error. Attempting to create a
     * feedback for an alert that is marked for deletion returns
     * `FAILED_PRECONDITION' error.
     * </pre>
     */
    public void createAlertFeedback(com.google.apps.alertcenter.v1beta1.CreateAlertFeedbackRequest request,
        io.grpc.stub.StreamObserver<com.google.apps.alertcenter.v1beta1.AlertFeedback> responseObserver) {
      io.grpc.stub.ClientCalls.asyncUnaryCall(
          getChannel().newCall(getCreateAlertFeedbackMethod(), getCallOptions()), request, responseObserver);
    }

    /**
     * <pre>
     * Lists all the feedback for an alert. Attempting to list feedbacks for
     * a non-existent alert returns `NOT_FOUND` error.
     * </pre>
     */
    public void listAlertFeedback(com.google.apps.alertcenter.v1beta1.ListAlertFeedbackRequest request,
        io.grpc.stub.StreamObserver<com.google.apps.alertcenter.v1beta1.ListAlertFeedbackResponse> responseObserver) {
      io.grpc.stub.ClientCalls.asyncUnaryCall(
          getChannel().newCall(getListAlertFeedbackMethod(), getCallOptions()), request, responseObserver);
    }

    /**
     * <pre>
     * Returns the metadata of an alert. Attempting to get metadata for
     * a non-existent alert returns `NOT_FOUND` error.
     * </pre>
     */
    public void getAlertMetadata(com.google.apps.alertcenter.v1beta1.GetAlertMetadataRequest request,
        io.grpc.stub.StreamObserver<com.google.apps.alertcenter.v1beta1.AlertMetadata> responseObserver) {
      io.grpc.stub.ClientCalls.asyncUnaryCall(
          getChannel().newCall(getGetAlertMetadataMethod(), getCallOptions()), request, responseObserver);
    }

    /**
     * <pre>
     * Returns customer-level settings.
     * </pre>
     */
    public void getSettings(com.google.apps.alertcenter.v1beta1.GetSettingsRequest request,
        io.grpc.stub.StreamObserver<com.google.apps.alertcenter.v1beta1.Settings> responseObserver) {
      io.grpc.stub.ClientCalls.asyncUnaryCall(
          getChannel().newCall(getGetSettingsMethod(), getCallOptions()), request, responseObserver);
    }

    /**
     * <pre>
     * Updates the customer-level settings.
     * </pre>
     */
    public void updateSettings(com.google.apps.alertcenter.v1beta1.UpdateSettingsRequest request,
        io.grpc.stub.StreamObserver<com.google.apps.alertcenter.v1beta1.Settings> responseObserver) {
      io.grpc.stub.ClientCalls.asyncUnaryCall(
          getChannel().newCall(getUpdateSettingsMethod(), getCallOptions()), request, responseObserver);
    }

    /**
     * <pre>
     * Performs batch delete operation on alerts.
     * </pre>
     */
    public void batchDeleteAlerts(com.google.apps.alertcenter.v1beta1.BatchDeleteAlertsRequest request,
        io.grpc.stub.StreamObserver<com.google.apps.alertcenter.v1beta1.BatchDeleteAlertsResponse> responseObserver) {
      io.grpc.stub.ClientCalls.asyncUnaryCall(
          getChannel().newCall(getBatchDeleteAlertsMethod(), getCallOptions()), request, responseObserver);
    }

    /**
     * <pre>
     * Performs batch undelete operation on alerts.
     * </pre>
     */
    public void batchUndeleteAlerts(com.google.apps.alertcenter.v1beta1.BatchUndeleteAlertsRequest request,
        io.grpc.stub.StreamObserver<com.google.apps.alertcenter.v1beta1.BatchUndeleteAlertsResponse> responseObserver) {
      io.grpc.stub.ClientCalls.asyncUnaryCall(
          getChannel().newCall(getBatchUndeleteAlertsMethod(), getCallOptions()), request, responseObserver);
    }
  }

  /**
   * <pre>
   * Google Workspace Alert Center API (beta).
   * </pre>
   */
  public static final class AlertCenterServiceBlockingStub extends io.grpc.stub.AbstractBlockingStub<AlertCenterServiceBlockingStub> {
    private AlertCenterServiceBlockingStub(
        io.grpc.Channel channel, io.grpc.CallOptions callOptions) {
      super(channel, callOptions);
    }

    @java.lang.Override
    protected AlertCenterServiceBlockingStub build(
        io.grpc.Channel channel, io.grpc.CallOptions callOptions) {
      return new AlertCenterServiceBlockingStub(channel, callOptions);
    }

    /**
     * <pre>
     * Lists the alerts.
     * </pre>
     */
    public com.google.apps.alertcenter.v1beta1.ListAlertsResponse listAlerts(com.google.apps.alertcenter.v1beta1.ListAlertsRequest request) {
      return io.grpc.stub.ClientCalls.blockingUnaryCall(
          getChannel(), getListAlertsMethod(), getCallOptions(), request);
    }

    /**
     * <pre>
     * Gets the specified alert. Attempting to get a nonexistent alert returns
     * `NOT_FOUND` error.
     * </pre>
     */
    public com.google.apps.alertcenter.v1beta1.Alert getAlert(com.google.apps.alertcenter.v1beta1.GetAlertRequest request) {
      return io.grpc.stub.ClientCalls.blockingUnaryCall(
          getChannel(), getGetAlertMethod(), getCallOptions(), request);
    }

    /**
     * <pre>
     * Marks the specified alert for deletion. An alert that has been marked for
     * deletion is removed from Alert Center after 30 days.
     * Marking an alert for deletion has no effect on an alert which has
     * already been marked for deletion. Attempting to mark a nonexistent alert
     * for deletion results in a `NOT_FOUND` error.
     * </pre>
     */
    public com.google.protobuf.Empty deleteAlert(com.google.apps.alertcenter.v1beta1.DeleteAlertRequest request) {
      return io.grpc.stub.ClientCalls.blockingUnaryCall(
          getChannel(), getDeleteAlertMethod(), getCallOptions(), request);
    }

    /**
     * <pre>
     * Restores, or "undeletes", an alert that was marked for deletion within the
     * past 30 days. Attempting to undelete an alert which was marked for deletion
     * over 30 days ago (which has been removed from the Alert Center database) or
     * a nonexistent alert returns a `NOT_FOUND` error. Attempting to
     * undelete an alert which has not been marked for deletion has no effect.
     * </pre>
     */
    public com.google.apps.alertcenter.v1beta1.Alert undeleteAlert(com.google.apps.alertcenter.v1beta1.UndeleteAlertRequest request) {
      return io.grpc.stub.ClientCalls.blockingUnaryCall(
          getChannel(), getUndeleteAlertMethod(), getCallOptions(), request);
    }

    /**
     * <pre>
     * Creates new feedback for an alert. Attempting to create a feedback for
     * a non-existent alert returns `NOT_FOUND` error. Attempting to create a
     * feedback for an alert that is marked for deletion returns
     * `FAILED_PRECONDITION' error.
     * </pre>
     */
    public com.google.apps.alertcenter.v1beta1.AlertFeedback createAlertFeedback(com.google.apps.alertcenter.v1beta1.CreateAlertFeedbackRequest request) {
      return io.grpc.stub.ClientCalls.blockingUnaryCall(
          getChannel(), getCreateAlertFeedbackMethod(), getCallOptions(), request);
    }

    /**
     * <pre>
     * Lists all the feedback for an alert. Attempting to list feedbacks for
     * a non-existent alert returns `NOT_FOUND` error.
     * </pre>
     */
    public com.google.apps.alertcenter.v1beta1.ListAlertFeedbackResponse listAlertFeedback(com.google.apps.alertcenter.v1beta1.ListAlertFeedbackRequest request) {
      return io.grpc.stub.ClientCalls.blockingUnaryCall(
          getChannel(), getListAlertFeedbackMethod(), getCallOptions(), request);
    }

    /**
     * <pre>
     * Returns the metadata of an alert. Attempting to get metadata for
     * a non-existent alert returns `NOT_FOUND` error.
     * </pre>
     */
    public com.google.apps.alertcenter.v1beta1.AlertMetadata getAlertMetadata(com.google.apps.alertcenter.v1beta1.GetAlertMetadataRequest request) {
      return io.grpc.stub.ClientCalls.blockingUnaryCall(
          getChannel(), getGetAlertMetadataMethod(), getCallOptions(), request);
    }

    /**
     * <pre>
     * Returns customer-level settings.
     * </pre>
     */
    public com.google.apps.alertcenter.v1beta1.Settings getSettings(com.google.apps.alertcenter.v1beta1.GetSettingsRequest request) {
      return io.grpc.stub.ClientCalls.blockingUnaryCall(
          getChannel(), getGetSettingsMethod(), getCallOptions(), request);
    }

    /**
     * <pre>
     * Updates the customer-level settings.
     * </pre>
     */
    public com.google.apps.alertcenter.v1beta1.Settings updateSettings(com.google.apps.alertcenter.v1beta1.UpdateSettingsRequest request) {
      return io.grpc.stub.ClientCalls.blockingUnaryCall(
          getChannel(), getUpdateSettingsMethod(), getCallOptions(), request);
    }

    /**
     * <pre>
     * Performs batch delete operation on alerts.
     * </pre>
     */
    public com.google.apps.alertcenter.v1beta1.BatchDeleteAlertsResponse batchDeleteAlerts(com.google.apps.alertcenter.v1beta1.BatchDeleteAlertsRequest request) {
      return io.grpc.stub.ClientCalls.blockingUnaryCall(
          getChannel(), getBatchDeleteAlertsMethod(), getCallOptions(), request);
    }

    /**
     * <pre>
     * Performs batch undelete operation on alerts.
     * </pre>
     */
    public com.google.apps.alertcenter.v1beta1.BatchUndeleteAlertsResponse batchUndeleteAlerts(com.google.apps.alertcenter.v1beta1.BatchUndeleteAlertsRequest request) {
      return io.grpc.stub.ClientCalls.blockingUnaryCall(
          getChannel(), getBatchUndeleteAlertsMethod(), getCallOptions(), request);
    }
  }

  /**
   * <pre>
   * Google Workspace Alert Center API (beta).
   * </pre>
   */
  public static final class AlertCenterServiceFutureStub extends io.grpc.stub.AbstractFutureStub<AlertCenterServiceFutureStub> {
    private AlertCenterServiceFutureStub(
        io.grpc.Channel channel, io.grpc.CallOptions callOptions) {
      super(channel, callOptions);
    }

    @java.lang.Override
    protected AlertCenterServiceFutureStub build(
        io.grpc.Channel channel, io.grpc.CallOptions callOptions) {
      return new AlertCenterServiceFutureStub(channel, callOptions);
    }

    /**
     * <pre>
     * Lists the alerts.
     * </pre>
     */
    public com.google.common.util.concurrent.ListenableFuture<com.google.apps.alertcenter.v1beta1.ListAlertsResponse> listAlerts(
        com.google.apps.alertcenter.v1beta1.ListAlertsRequest request) {
      return io.grpc.stub.ClientCalls.futureUnaryCall(
          getChannel().newCall(getListAlertsMethod(), getCallOptions()), request);
    }

    /**
     * <pre>
     * Gets the specified alert. Attempting to get a nonexistent alert returns
     * `NOT_FOUND` error.
     * </pre>
     */
    public com.google.common.util.concurrent.ListenableFuture<com.google.apps.alertcenter.v1beta1.Alert> getAlert(
        com.google.apps.alertcenter.v1beta1.GetAlertRequest request) {
      return io.grpc.stub.ClientCalls.futureUnaryCall(
          getChannel().newCall(getGetAlertMethod(), getCallOptions()), request);
    }

    /**
     * <pre>
     * Marks the specified alert for deletion. An alert that has been marked for
     * deletion is removed from Alert Center after 30 days.
     * Marking an alert for deletion has no effect on an alert which has
     * already been marked for deletion. Attempting to mark a nonexistent alert
     * for deletion results in a `NOT_FOUND` error.
     * </pre>
     */
    public com.google.common.util.concurrent.ListenableFuture<com.google.protobuf.Empty> deleteAlert(
        com.google.apps.alertcenter.v1beta1.DeleteAlertRequest request) {
      return io.grpc.stub.ClientCalls.futureUnaryCall(
          getChannel().newCall(getDeleteAlertMethod(), getCallOptions()), request);
    }

    /**
     * <pre>
     * Restores, or "undeletes", an alert that was marked for deletion within the
     * past 30 days. Attempting to undelete an alert which was marked for deletion
     * over 30 days ago (which has been removed from the Alert Center database) or
     * a nonexistent alert returns a `NOT_FOUND` error. Attempting to
     * undelete an alert which has not been marked for deletion has no effect.
     * </pre>
     */
    public com.google.common.util.concurrent.ListenableFuture<com.google.apps.alertcenter.v1beta1.Alert> undeleteAlert(
        com.google.apps.alertcenter.v1beta1.UndeleteAlertRequest request) {
      return io.grpc.stub.ClientCalls.futureUnaryCall(
          getChannel().newCall(getUndeleteAlertMethod(), getCallOptions()), request);
    }

    /**
     * <pre>
     * Creates new feedback for an alert. Attempting to create a feedback for
     * a non-existent alert returns `NOT_FOUND` error. Attempting to create a
     * feedback for an alert that is marked for deletion returns
     * `FAILED_PRECONDITION' error.
     * </pre>
     */
    public com.google.common.util.concurrent.ListenableFuture<com.google.apps.alertcenter.v1beta1.AlertFeedback> createAlertFeedback(
        com.google.apps.alertcenter.v1beta1.CreateAlertFeedbackRequest request) {
      return io.grpc.stub.ClientCalls.futureUnaryCall(
          getChannel().newCall(getCreateAlertFeedbackMethod(), getCallOptions()), request);
    }

    /**
     * <pre>
     * Lists all the feedback for an alert. Attempting to list feedbacks for
     * a non-existent alert returns `NOT_FOUND` error.
     * </pre>
     */
    public com.google.common.util.concurrent.ListenableFuture<com.google.apps.alertcenter.v1beta1.ListAlertFeedbackResponse> listAlertFeedback(
        com.google.apps.alertcenter.v1beta1.ListAlertFeedbackRequest request) {
      return io.grpc.stub.ClientCalls.futureUnaryCall(
          getChannel().newCall(getListAlertFeedbackMethod(), getCallOptions()), request);
    }

    /**
     * <pre>
     * Returns the metadata of an alert. Attempting to get metadata for
     * a non-existent alert returns `NOT_FOUND` error.
     * </pre>
     */
    public com.google.common.util.concurrent.ListenableFuture<com.google.apps.alertcenter.v1beta1.AlertMetadata> getAlertMetadata(
        com.google.apps.alertcenter.v1beta1.GetAlertMetadataRequest request) {
      return io.grpc.stub.ClientCalls.futureUnaryCall(
          getChannel().newCall(getGetAlertMetadataMethod(), getCallOptions()), request);
    }

    /**
     * <pre>
     * Returns customer-level settings.
     * </pre>
     */
    public com.google.common.util.concurrent.ListenableFuture<com.google.apps.alertcenter.v1beta1.Settings> getSettings(
        com.google.apps.alertcenter.v1beta1.GetSettingsRequest request) {
      return io.grpc.stub.ClientCalls.futureUnaryCall(
          getChannel().newCall(getGetSettingsMethod(), getCallOptions()), request);
    }

    /**
     * <pre>
     * Updates the customer-level settings.
     * </pre>
     */
    public com.google.common.util.concurrent.ListenableFuture<com.google.apps.alertcenter.v1beta1.Settings> updateSettings(
        com.google.apps.alertcenter.v1beta1.UpdateSettingsRequest request) {
      return io.grpc.stub.ClientCalls.futureUnaryCall(
          getChannel().newCall(getUpdateSettingsMethod(), getCallOptions()), request);
    }

    /**
     * <pre>
     * Performs batch delete operation on alerts.
     * </pre>
     */
    public com.google.common.util.concurrent.ListenableFuture<com.google.apps.alertcenter.v1beta1.BatchDeleteAlertsResponse> batchDeleteAlerts(
        com.google.apps.alertcenter.v1beta1.BatchDeleteAlertsRequest request) {
      return io.grpc.stub.ClientCalls.futureUnaryCall(
          getChannel().newCall(getBatchDeleteAlertsMethod(), getCallOptions()), request);
    }

    /**
     * <pre>
     * Performs batch undelete operation on alerts.
     * </pre>
     */
    public com.google.common.util.concurrent.ListenableFuture<com.google.apps.alertcenter.v1beta1.BatchUndeleteAlertsResponse> batchUndeleteAlerts(
        com.google.apps.alertcenter.v1beta1.BatchUndeleteAlertsRequest request) {
      return io.grpc.stub.ClientCalls.futureUnaryCall(
          getChannel().newCall(getBatchUndeleteAlertsMethod(), getCallOptions()), request);
    }
  }

  private static final int METHODID_LIST_ALERTS = 0;
  private static final int METHODID_GET_ALERT = 1;
  private static final int METHODID_DELETE_ALERT = 2;
  private static final int METHODID_UNDELETE_ALERT = 3;
  private static final int METHODID_CREATE_ALERT_FEEDBACK = 4;
  private static final int METHODID_LIST_ALERT_FEEDBACK = 5;
  private static final int METHODID_GET_ALERT_METADATA = 6;
  private static final int METHODID_GET_SETTINGS = 7;
  private static final int METHODID_UPDATE_SETTINGS = 8;
  private static final int METHODID_BATCH_DELETE_ALERTS = 9;
  private static final int METHODID_BATCH_UNDELETE_ALERTS = 10;

  private static final class MethodHandlers<Req, Resp> implements
      io.grpc.stub.ServerCalls.UnaryMethod<Req, Resp>,
      io.grpc.stub.ServerCalls.ServerStreamingMethod<Req, Resp>,
      io.grpc.stub.ServerCalls.ClientStreamingMethod<Req, Resp>,
      io.grpc.stub.ServerCalls.BidiStreamingMethod<Req, Resp> {
    private final AlertCenterServiceImplBase serviceImpl;
    private final int methodId;

    MethodHandlers(AlertCenterServiceImplBase serviceImpl, int methodId) {
      this.serviceImpl = serviceImpl;
      this.methodId = methodId;
    }

    @java.lang.Override
    @java.lang.SuppressWarnings("unchecked")
    public void invoke(Req request, io.grpc.stub.StreamObserver<Resp> responseObserver) {
      switch (methodId) {
        case METHODID_LIST_ALERTS:
          serviceImpl.listAlerts((com.google.apps.alertcenter.v1beta1.ListAlertsRequest) request,
              (io.grpc.stub.StreamObserver<com.google.apps.alertcenter.v1beta1.ListAlertsResponse>) responseObserver);
          break;
        case METHODID_GET_ALERT:
          serviceImpl.getAlert((com.google.apps.alertcenter.v1beta1.GetAlertRequest) request,
              (io.grpc.stub.StreamObserver<com.google.apps.alertcenter.v1beta1.Alert>) responseObserver);
          break;
        case METHODID_DELETE_ALERT:
          serviceImpl.deleteAlert((com.google.apps.alertcenter.v1beta1.DeleteAlertRequest) request,
              (io.grpc.stub.StreamObserver<com.google.protobuf.Empty>) responseObserver);
          break;
        case METHODID_UNDELETE_ALERT:
          serviceImpl.undeleteAlert((com.google.apps.alertcenter.v1beta1.UndeleteAlertRequest) request,
              (io.grpc.stub.StreamObserver<com.google.apps.alertcenter.v1beta1.Alert>) responseObserver);
          break;
        case METHODID_CREATE_ALERT_FEEDBACK:
          serviceImpl.createAlertFeedback((com.google.apps.alertcenter.v1beta1.CreateAlertFeedbackRequest) request,
              (io.grpc.stub.StreamObserver<com.google.apps.alertcenter.v1beta1.AlertFeedback>) responseObserver);
          break;
        case METHODID_LIST_ALERT_FEEDBACK:
          serviceImpl.listAlertFeedback((com.google.apps.alertcenter.v1beta1.ListAlertFeedbackRequest) request,
              (io.grpc.stub.StreamObserver<com.google.apps.alertcenter.v1beta1.ListAlertFeedbackResponse>) responseObserver);
          break;
        case METHODID_GET_ALERT_METADATA:
          serviceImpl.getAlertMetadata((com.google.apps.alertcenter.v1beta1.GetAlertMetadataRequest) request,
              (io.grpc.stub.StreamObserver<com.google.apps.alertcenter.v1beta1.AlertMetadata>) responseObserver);
          break;
        case METHODID_GET_SETTINGS:
          serviceImpl.getSettings((com.google.apps.alertcenter.v1beta1.GetSettingsRequest) request,
              (io.grpc.stub.StreamObserver<com.google.apps.alertcenter.v1beta1.Settings>) responseObserver);
          break;
        case METHODID_UPDATE_SETTINGS:
          serviceImpl.updateSettings((com.google.apps.alertcenter.v1beta1.UpdateSettingsRequest) request,
              (io.grpc.stub.StreamObserver<com.google.apps.alertcenter.v1beta1.Settings>) responseObserver);
          break;
        case METHODID_BATCH_DELETE_ALERTS:
          serviceImpl.batchDeleteAlerts((com.google.apps.alertcenter.v1beta1.BatchDeleteAlertsRequest) request,
              (io.grpc.stub.StreamObserver<com.google.apps.alertcenter.v1beta1.BatchDeleteAlertsResponse>) responseObserver);
          break;
        case METHODID_BATCH_UNDELETE_ALERTS:
          serviceImpl.batchUndeleteAlerts((com.google.apps.alertcenter.v1beta1.BatchUndeleteAlertsRequest) request,
              (io.grpc.stub.StreamObserver<com.google.apps.alertcenter.v1beta1.BatchUndeleteAlertsResponse>) responseObserver);
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

  private static abstract class AlertCenterServiceBaseDescriptorSupplier
      implements io.grpc.protobuf.ProtoFileDescriptorSupplier, io.grpc.protobuf.ProtoServiceDescriptorSupplier {
    AlertCenterServiceBaseDescriptorSupplier() {}

    @java.lang.Override
    public com.google.protobuf.Descriptors.FileDescriptor getFileDescriptor() {
      return com.google.apps.alertcenter.v1beta1.AlertCenterProto.getDescriptor();
    }

    @java.lang.Override
    public com.google.protobuf.Descriptors.ServiceDescriptor getServiceDescriptor() {
      return getFileDescriptor().findServiceByName("AlertCenterService");
    }
  }

  private static final class AlertCenterServiceFileDescriptorSupplier
      extends AlertCenterServiceBaseDescriptorSupplier {
    AlertCenterServiceFileDescriptorSupplier() {}
  }

  private static final class AlertCenterServiceMethodDescriptorSupplier
      extends AlertCenterServiceBaseDescriptorSupplier
      implements io.grpc.protobuf.ProtoMethodDescriptorSupplier {
    private final String methodName;

    AlertCenterServiceMethodDescriptorSupplier(String methodName) {
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
      synchronized (AlertCenterServiceGrpc.class) {
        result = serviceDescriptor;
        if (result == null) {
          serviceDescriptor = result = io.grpc.ServiceDescriptor.newBuilder(SERVICE_NAME)
              .setSchemaDescriptor(new AlertCenterServiceFileDescriptorSupplier())
              .addMethod(getListAlertsMethod())
              .addMethod(getGetAlertMethod())
              .addMethod(getDeleteAlertMethod())
              .addMethod(getUndeleteAlertMethod())
              .addMethod(getCreateAlertFeedbackMethod())
              .addMethod(getListAlertFeedbackMethod())
              .addMethod(getGetAlertMetadataMethod())
              .addMethod(getGetSettingsMethod())
              .addMethod(getUpdateSettingsMethod())
              .addMethod(getBatchDeleteAlertsMethod())
              .addMethod(getBatchUndeleteAlertsMethod())
              .build();
        }
      }
    }
    return result;
  }
}
