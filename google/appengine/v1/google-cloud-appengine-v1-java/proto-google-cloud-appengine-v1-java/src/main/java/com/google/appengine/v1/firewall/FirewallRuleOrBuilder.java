// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/appengine/v1/firewall.proto

package com.google.appengine.v1.firewall;

public interface FirewallRuleOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.appengine.v1.FirewallRule)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * A positive integer between [1, Int32.MaxValue-1] that defines the order of
   * rule evaluation. Rules with the lowest priority are evaluated first.
   * A default rule at priority Int32.MaxValue matches all IPv4 and IPv6 traffic
   * when no previous rule matches. Only the action of this rule can be modified
   * by the user.
   * </pre>
   *
   * <code>int32 priority = 1;</code>
   * @return The priority.
   */
  int getPriority();

  /**
   * <pre>
   * The action to take on matched requests.
   * </pre>
   *
   * <code>.google.appengine.v1.FirewallRule.Action action = 2;</code>
   * @return The enum numeric value on the wire for action.
   */
  int getActionValue();
  /**
   * <pre>
   * The action to take on matched requests.
   * </pre>
   *
   * <code>.google.appengine.v1.FirewallRule.Action action = 2;</code>
   * @return The action.
   */
  com.google.appengine.v1.firewall.FirewallRule.Action getAction();

  /**
   * <pre>
   * IP address or range, defined using CIDR notation, of requests that this
   * rule applies to. You can use the wildcard character "*" to match all IPs
   * equivalent to "0/0" and "::/0" together.
   * Examples: `192.168.1.1` or `192.168.0.0/16` or `2001:db8::/32`
   *           or `2001:0db8:0000:0042:0000:8a2e:0370:7334`.
   * &lt;p&gt;Truncation will be silently performed on addresses which are not
   * properly truncated. For example, `1.2.3.4/24` is accepted as the same
   * address as `1.2.3.0/24`. Similarly, for IPv6, `2001:db8::1/32` is accepted
   * as the same address as `2001:db8::/32`.
   * </pre>
   *
   * <code>string source_range = 3;</code>
   * @return The sourceRange.
   */
  java.lang.String getSourceRange();
  /**
   * <pre>
   * IP address or range, defined using CIDR notation, of requests that this
   * rule applies to. You can use the wildcard character "*" to match all IPs
   * equivalent to "0/0" and "::/0" together.
   * Examples: `192.168.1.1` or `192.168.0.0/16` or `2001:db8::/32`
   *           or `2001:0db8:0000:0042:0000:8a2e:0370:7334`.
   * &lt;p&gt;Truncation will be silently performed on addresses which are not
   * properly truncated. For example, `1.2.3.4/24` is accepted as the same
   * address as `1.2.3.0/24`. Similarly, for IPv6, `2001:db8::1/32` is accepted
   * as the same address as `2001:db8::/32`.
   * </pre>
   *
   * <code>string source_range = 3;</code>
   * @return The bytes for sourceRange.
   */
  com.google.protobuf.ByteString
      getSourceRangeBytes();

  /**
   * <pre>
   * An optional string description of this rule.
   * This field has a maximum length of 100 characters.
   * </pre>
   *
   * <code>string description = 4;</code>
   * @return The description.
   */
  java.lang.String getDescription();
  /**
   * <pre>
   * An optional string description of this rule.
   * This field has a maximum length of 100 characters.
   * </pre>
   *
   * <code>string description = 4;</code>
   * @return The bytes for description.
   */
  com.google.protobuf.ByteString
      getDescriptionBytes();
}
