/*
 * Copyright 2021 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

package com.google.cloud.iam.admin.v1;

import com.google.api.core.BetaApi;
import com.google.iam.admin.v1.CreateRoleRequest;
import com.google.iam.admin.v1.CreateServiceAccountKeyRequest;
import com.google.iam.admin.v1.CreateServiceAccountRequest;
import com.google.iam.admin.v1.DeleteRoleRequest;
import com.google.iam.admin.v1.DeleteServiceAccountKeyRequest;
import com.google.iam.admin.v1.DeleteServiceAccountRequest;
import com.google.iam.admin.v1.GetRoleRequest;
import com.google.iam.admin.v1.GetServiceAccountKeyRequest;
import com.google.iam.admin.v1.GetServiceAccountRequest;
import com.google.iam.admin.v1.IAMGrpc.IAMImplBase;
import com.google.iam.admin.v1.ListRolesRequest;
import com.google.iam.admin.v1.ListRolesResponse;
import com.google.iam.admin.v1.ListServiceAccountKeysRequest;
import com.google.iam.admin.v1.ListServiceAccountKeysResponse;
import com.google.iam.admin.v1.ListServiceAccountsRequest;
import com.google.iam.admin.v1.ListServiceAccountsResponse;
import com.google.iam.admin.v1.QueryGrantableRolesRequest;
import com.google.iam.admin.v1.QueryGrantableRolesResponse;
import com.google.iam.admin.v1.QueryTestablePermissionsRequest;
import com.google.iam.admin.v1.QueryTestablePermissionsResponse;
import com.google.iam.admin.v1.Role;
import com.google.iam.admin.v1.ServiceAccount;
import com.google.iam.admin.v1.ServiceAccountKey;
import com.google.iam.admin.v1.SignBlobRequest;
import com.google.iam.admin.v1.SignBlobResponse;
import com.google.iam.admin.v1.SignJwtRequest;
import com.google.iam.admin.v1.SignJwtResponse;
import com.google.iam.admin.v1.UndeleteRoleRequest;
import com.google.iam.admin.v1.UpdateRoleRequest;
import com.google.iam.v1.GetIamPolicyRequest;
import com.google.iam.v1.Policy;
import com.google.iam.v1.SetIamPolicyRequest;
import com.google.iam.v1.TestIamPermissionsRequest;
import com.google.iam.v1.TestIamPermissionsResponse;
import com.google.protobuf.AbstractMessage;
import com.google.protobuf.Empty;
import io.grpc.stub.StreamObserver;
import java.util.ArrayList;
import java.util.LinkedList;
import java.util.List;
import java.util.Queue;
import javax.annotation.Generated;

@BetaApi
@Generated("by gapic-generator-java")
public class MockIAMImpl extends IAMImplBase {
  private List<AbstractMessage> requests;
  private Queue<Object> responses;

  public MockIAMImpl() {
    requests = new ArrayList<>();
    responses = new LinkedList<>();
  }

  public List<AbstractMessage> getRequests() {
    return requests;
  }

  public void addResponse(AbstractMessage response) {
    responses.add(response);
  }

  public void setResponses(List<AbstractMessage> responses) {
    this.responses = new LinkedList<Object>(responses);
  }

  public void addException(Exception exception) {
    responses.add(exception);
  }

  public void reset() {
    requests = new ArrayList<>();
    responses = new LinkedList<>();
  }

  @Override
  public void listServiceAccounts(
      ListServiceAccountsRequest request,
      StreamObserver<ListServiceAccountsResponse> responseObserver) {
    Object response = responses.remove();
    if (response instanceof ListServiceAccountsResponse) {
      requests.add(request);
      responseObserver.onNext(((ListServiceAccountsResponse) response));
      responseObserver.onCompleted();
    } else if (response instanceof Exception) {
      responseObserver.onError(((Exception) response));
    } else {
      responseObserver.onError(
          new IllegalArgumentException(
              String.format(
                  "Unrecognized response type %s for method ListServiceAccounts, expected %s or %s",
                  response.getClass().getName(),
                  ListServiceAccountsResponse.class.getName(),
                  Exception.class.getName())));
    }
  }

  @Override
  public void getServiceAccount(
      GetServiceAccountRequest request, StreamObserver<ServiceAccount> responseObserver) {
    Object response = responses.remove();
    if (response instanceof ServiceAccount) {
      requests.add(request);
      responseObserver.onNext(((ServiceAccount) response));
      responseObserver.onCompleted();
    } else if (response instanceof Exception) {
      responseObserver.onError(((Exception) response));
    } else {
      responseObserver.onError(
          new IllegalArgumentException(
              String.format(
                  "Unrecognized response type %s for method GetServiceAccount, expected %s or %s",
                  response.getClass().getName(),
                  ServiceAccount.class.getName(),
                  Exception.class.getName())));
    }
  }

  @Override
  public void createServiceAccount(
      CreateServiceAccountRequest request, StreamObserver<ServiceAccount> responseObserver) {
    Object response = responses.remove();
    if (response instanceof ServiceAccount) {
      requests.add(request);
      responseObserver.onNext(((ServiceAccount) response));
      responseObserver.onCompleted();
    } else if (response instanceof Exception) {
      responseObserver.onError(((Exception) response));
    } else {
      responseObserver.onError(
          new IllegalArgumentException(
              String.format(
                  "Unrecognized response type %s for method CreateServiceAccount, expected %s or %s",
                  response.getClass().getName(),
                  ServiceAccount.class.getName(),
                  Exception.class.getName())));
    }
  }

  @Override
  public void updateServiceAccount(
      ServiceAccount request, StreamObserver<ServiceAccount> responseObserver) {
    Object response = responses.remove();
    if (response instanceof ServiceAccount) {
      requests.add(request);
      responseObserver.onNext(((ServiceAccount) response));
      responseObserver.onCompleted();
    } else if (response instanceof Exception) {
      responseObserver.onError(((Exception) response));
    } else {
      responseObserver.onError(
          new IllegalArgumentException(
              String.format(
                  "Unrecognized response type %s for method UpdateServiceAccount, expected %s or %s",
                  response.getClass().getName(),
                  ServiceAccount.class.getName(),
                  Exception.class.getName())));
    }
  }

  @Override
  public void deleteServiceAccount(
      DeleteServiceAccountRequest request, StreamObserver<Empty> responseObserver) {
    Object response = responses.remove();
    if (response instanceof Empty) {
      requests.add(request);
      responseObserver.onNext(((Empty) response));
      responseObserver.onCompleted();
    } else if (response instanceof Exception) {
      responseObserver.onError(((Exception) response));
    } else {
      responseObserver.onError(
          new IllegalArgumentException(
              String.format(
                  "Unrecognized response type %s for method DeleteServiceAccount, expected %s or %s",
                  response.getClass().getName(),
                  Empty.class.getName(),
                  Exception.class.getName())));
    }
  }

  @Override
  public void listServiceAccountKeys(
      ListServiceAccountKeysRequest request,
      StreamObserver<ListServiceAccountKeysResponse> responseObserver) {
    Object response = responses.remove();
    if (response instanceof ListServiceAccountKeysResponse) {
      requests.add(request);
      responseObserver.onNext(((ListServiceAccountKeysResponse) response));
      responseObserver.onCompleted();
    } else if (response instanceof Exception) {
      responseObserver.onError(((Exception) response));
    } else {
      responseObserver.onError(
          new IllegalArgumentException(
              String.format(
                  "Unrecognized response type %s for method ListServiceAccountKeys, expected %s or %s",
                  response.getClass().getName(),
                  ListServiceAccountKeysResponse.class.getName(),
                  Exception.class.getName())));
    }
  }

  @Override
  public void getServiceAccountKey(
      GetServiceAccountKeyRequest request, StreamObserver<ServiceAccountKey> responseObserver) {
    Object response = responses.remove();
    if (response instanceof ServiceAccountKey) {
      requests.add(request);
      responseObserver.onNext(((ServiceAccountKey) response));
      responseObserver.onCompleted();
    } else if (response instanceof Exception) {
      responseObserver.onError(((Exception) response));
    } else {
      responseObserver.onError(
          new IllegalArgumentException(
              String.format(
                  "Unrecognized response type %s for method GetServiceAccountKey, expected %s or %s",
                  response.getClass().getName(),
                  ServiceAccountKey.class.getName(),
                  Exception.class.getName())));
    }
  }

  @Override
  public void createServiceAccountKey(
      CreateServiceAccountKeyRequest request, StreamObserver<ServiceAccountKey> responseObserver) {
    Object response = responses.remove();
    if (response instanceof ServiceAccountKey) {
      requests.add(request);
      responseObserver.onNext(((ServiceAccountKey) response));
      responseObserver.onCompleted();
    } else if (response instanceof Exception) {
      responseObserver.onError(((Exception) response));
    } else {
      responseObserver.onError(
          new IllegalArgumentException(
              String.format(
                  "Unrecognized response type %s for method CreateServiceAccountKey, expected %s or %s",
                  response.getClass().getName(),
                  ServiceAccountKey.class.getName(),
                  Exception.class.getName())));
    }
  }

  @Override
  public void deleteServiceAccountKey(
      DeleteServiceAccountKeyRequest request, StreamObserver<Empty> responseObserver) {
    Object response = responses.remove();
    if (response instanceof Empty) {
      requests.add(request);
      responseObserver.onNext(((Empty) response));
      responseObserver.onCompleted();
    } else if (response instanceof Exception) {
      responseObserver.onError(((Exception) response));
    } else {
      responseObserver.onError(
          new IllegalArgumentException(
              String.format(
                  "Unrecognized response type %s for method DeleteServiceAccountKey, expected %s or %s",
                  response.getClass().getName(),
                  Empty.class.getName(),
                  Exception.class.getName())));
    }
  }

  @Override
  public void signBlob(SignBlobRequest request, StreamObserver<SignBlobResponse> responseObserver) {
    Object response = responses.remove();
    if (response instanceof SignBlobResponse) {
      requests.add(request);
      responseObserver.onNext(((SignBlobResponse) response));
      responseObserver.onCompleted();
    } else if (response instanceof Exception) {
      responseObserver.onError(((Exception) response));
    } else {
      responseObserver.onError(
          new IllegalArgumentException(
              String.format(
                  "Unrecognized response type %s for method SignBlob, expected %s or %s",
                  response.getClass().getName(),
                  SignBlobResponse.class.getName(),
                  Exception.class.getName())));
    }
  }

  @Override
  public void signJwt(SignJwtRequest request, StreamObserver<SignJwtResponse> responseObserver) {
    Object response = responses.remove();
    if (response instanceof SignJwtResponse) {
      requests.add(request);
      responseObserver.onNext(((SignJwtResponse) response));
      responseObserver.onCompleted();
    } else if (response instanceof Exception) {
      responseObserver.onError(((Exception) response));
    } else {
      responseObserver.onError(
          new IllegalArgumentException(
              String.format(
                  "Unrecognized response type %s for method SignJwt, expected %s or %s",
                  response.getClass().getName(),
                  SignJwtResponse.class.getName(),
                  Exception.class.getName())));
    }
  }

  @Override
  public void getIamPolicy(GetIamPolicyRequest request, StreamObserver<Policy> responseObserver) {
    Object response = responses.remove();
    if (response instanceof Policy) {
      requests.add(request);
      responseObserver.onNext(((Policy) response));
      responseObserver.onCompleted();
    } else if (response instanceof Exception) {
      responseObserver.onError(((Exception) response));
    } else {
      responseObserver.onError(
          new IllegalArgumentException(
              String.format(
                  "Unrecognized response type %s for method GetIamPolicy, expected %s or %s",
                  response.getClass().getName(),
                  Policy.class.getName(),
                  Exception.class.getName())));
    }
  }

  @Override
  public void setIamPolicy(SetIamPolicyRequest request, StreamObserver<Policy> responseObserver) {
    Object response = responses.remove();
    if (response instanceof Policy) {
      requests.add(request);
      responseObserver.onNext(((Policy) response));
      responseObserver.onCompleted();
    } else if (response instanceof Exception) {
      responseObserver.onError(((Exception) response));
    } else {
      responseObserver.onError(
          new IllegalArgumentException(
              String.format(
                  "Unrecognized response type %s for method SetIamPolicy, expected %s or %s",
                  response.getClass().getName(),
                  Policy.class.getName(),
                  Exception.class.getName())));
    }
  }

  @Override
  public void testIamPermissions(
      TestIamPermissionsRequest request,
      StreamObserver<TestIamPermissionsResponse> responseObserver) {
    Object response = responses.remove();
    if (response instanceof TestIamPermissionsResponse) {
      requests.add(request);
      responseObserver.onNext(((TestIamPermissionsResponse) response));
      responseObserver.onCompleted();
    } else if (response instanceof Exception) {
      responseObserver.onError(((Exception) response));
    } else {
      responseObserver.onError(
          new IllegalArgumentException(
              String.format(
                  "Unrecognized response type %s for method TestIamPermissions, expected %s or %s",
                  response.getClass().getName(),
                  TestIamPermissionsResponse.class.getName(),
                  Exception.class.getName())));
    }
  }

  @Override
  public void queryGrantableRoles(
      QueryGrantableRolesRequest request,
      StreamObserver<QueryGrantableRolesResponse> responseObserver) {
    Object response = responses.remove();
    if (response instanceof QueryGrantableRolesResponse) {
      requests.add(request);
      responseObserver.onNext(((QueryGrantableRolesResponse) response));
      responseObserver.onCompleted();
    } else if (response instanceof Exception) {
      responseObserver.onError(((Exception) response));
    } else {
      responseObserver.onError(
          new IllegalArgumentException(
              String.format(
                  "Unrecognized response type %s for method QueryGrantableRoles, expected %s or %s",
                  response.getClass().getName(),
                  QueryGrantableRolesResponse.class.getName(),
                  Exception.class.getName())));
    }
  }

  @Override
  public void listRoles(
      ListRolesRequest request, StreamObserver<ListRolesResponse> responseObserver) {
    Object response = responses.remove();
    if (response instanceof ListRolesResponse) {
      requests.add(request);
      responseObserver.onNext(((ListRolesResponse) response));
      responseObserver.onCompleted();
    } else if (response instanceof Exception) {
      responseObserver.onError(((Exception) response));
    } else {
      responseObserver.onError(
          new IllegalArgumentException(
              String.format(
                  "Unrecognized response type %s for method ListRoles, expected %s or %s",
                  response.getClass().getName(),
                  ListRolesResponse.class.getName(),
                  Exception.class.getName())));
    }
  }

  @Override
  public void getRole(GetRoleRequest request, StreamObserver<Role> responseObserver) {
    Object response = responses.remove();
    if (response instanceof Role) {
      requests.add(request);
      responseObserver.onNext(((Role) response));
      responseObserver.onCompleted();
    } else if (response instanceof Exception) {
      responseObserver.onError(((Exception) response));
    } else {
      responseObserver.onError(
          new IllegalArgumentException(
              String.format(
                  "Unrecognized response type %s for method GetRole, expected %s or %s",
                  response.getClass().getName(), Role.class.getName(), Exception.class.getName())));
    }
  }

  @Override
  public void createRole(CreateRoleRequest request, StreamObserver<Role> responseObserver) {
    Object response = responses.remove();
    if (response instanceof Role) {
      requests.add(request);
      responseObserver.onNext(((Role) response));
      responseObserver.onCompleted();
    } else if (response instanceof Exception) {
      responseObserver.onError(((Exception) response));
    } else {
      responseObserver.onError(
          new IllegalArgumentException(
              String.format(
                  "Unrecognized response type %s for method CreateRole, expected %s or %s",
                  response.getClass().getName(), Role.class.getName(), Exception.class.getName())));
    }
  }

  @Override
  public void updateRole(UpdateRoleRequest request, StreamObserver<Role> responseObserver) {
    Object response = responses.remove();
    if (response instanceof Role) {
      requests.add(request);
      responseObserver.onNext(((Role) response));
      responseObserver.onCompleted();
    } else if (response instanceof Exception) {
      responseObserver.onError(((Exception) response));
    } else {
      responseObserver.onError(
          new IllegalArgumentException(
              String.format(
                  "Unrecognized response type %s for method UpdateRole, expected %s or %s",
                  response.getClass().getName(), Role.class.getName(), Exception.class.getName())));
    }
  }

  @Override
  public void deleteRole(DeleteRoleRequest request, StreamObserver<Role> responseObserver) {
    Object response = responses.remove();
    if (response instanceof Role) {
      requests.add(request);
      responseObserver.onNext(((Role) response));
      responseObserver.onCompleted();
    } else if (response instanceof Exception) {
      responseObserver.onError(((Exception) response));
    } else {
      responseObserver.onError(
          new IllegalArgumentException(
              String.format(
                  "Unrecognized response type %s for method DeleteRole, expected %s or %s",
                  response.getClass().getName(), Role.class.getName(), Exception.class.getName())));
    }
  }

  @Override
  public void undeleteRole(UndeleteRoleRequest request, StreamObserver<Role> responseObserver) {
    Object response = responses.remove();
    if (response instanceof Role) {
      requests.add(request);
      responseObserver.onNext(((Role) response));
      responseObserver.onCompleted();
    } else if (response instanceof Exception) {
      responseObserver.onError(((Exception) response));
    } else {
      responseObserver.onError(
          new IllegalArgumentException(
              String.format(
                  "Unrecognized response type %s for method UndeleteRole, expected %s or %s",
                  response.getClass().getName(), Role.class.getName(), Exception.class.getName())));
    }
  }

  @Override
  public void queryTestablePermissions(
      QueryTestablePermissionsRequest request,
      StreamObserver<QueryTestablePermissionsResponse> responseObserver) {
    Object response = responses.remove();
    if (response instanceof QueryTestablePermissionsResponse) {
      requests.add(request);
      responseObserver.onNext(((QueryTestablePermissionsResponse) response));
      responseObserver.onCompleted();
    } else if (response instanceof Exception) {
      responseObserver.onError(((Exception) response));
    } else {
      responseObserver.onError(
          new IllegalArgumentException(
              String.format(
                  "Unrecognized response type %s for method QueryTestablePermissions, expected %s or %s",
                  response.getClass().getName(),
                  QueryTestablePermissionsResponse.class.getName(),
                  Exception.class.getName())));
    }
  }
}
